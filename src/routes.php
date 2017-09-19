<?php
// Routes

$app->get('/', function ($request, $response, $args) {

    return $this->renderer->render($response, 'index.phtml', $data);

});
$app->get('/list', 'ListController:index')->setName('home.list');
$app->get('/signup', 'AuthController:getSignUp')->setName('auth.signup');
$app->post('/signup', 'AuthController:postSignUp');

$app->get('/signin', 'AuthController:getSignIn')->setName('auth.signin');
$app->post('/signin', 'AuthController:postSignIn');

$app->get('/signout', 'AuthController:getSignOut')->setName('auth.signout');

