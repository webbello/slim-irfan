<?php
// DIC configuration

$container = $app->getContainer();

$container['auth'] = function ($container) {
    return new App\Auth\Auth($container);
};
// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// Register component on container
$container['view'] = function ($c) {
	$settings = $c->get('settings')['view'];
    //dd($settings['template_path']);
    $view = new \Slim\Views\Twig($settings['template_path'], [
        'debug' => $settings['debug'],
        'cache' => $settings['cache_path']
    ]);
    
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
    //dd($basePath);
    // $view->addExtension(new Slim\Views\TwigExtension(
    //         $c->get('router'),
    //         $c->get('request')->getUri()
    //     ));
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $basePath));
    $view->addExtension(new Twig_Extension_Debug());
    $view->getEnvironment()->addGlobal('auth', [
        'check' => $c->auth->check(),
        'user' => $c->auth->user(),
    ]);

    return $view;
};
// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// PDO database library
$container['db'] = function ($c) {
    $settings = $c->get('settings')['db'];
    try {
        $pdo = new PDO("mysql:host=" . $settings['host'] . ";dbname=" . $settings['database'],
        $settings['username'], $settings['password']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

    return $pdo;
};
// -----------------------------------------------------------------------------
// Controllers
// -----------------------------------------------------------------------------
$container['ListController'] = function ($container) {
    return new App\Controllers\ListController($container);
};
$container['AuthController'] = function ($container) {
    return new App\Controllers\Auth\AuthController($container);
};

// -----------------------------------------------------------------------------
// Model factories
// -----------------------------------------------------------------------------
$container['User'] = function ($container) {
    return new App\Models\User($container);
};
$container['Coordinator'] = function ($container) {
    return new App\Models\Coordinator($container);
};