<?php
namespace App\Controllers\Auth;

use App\Controllers\Controller;

class AuthController extends Controller
{
	// SignOut
	public function getSignOut($request, $response)
	{
		$this->auth->logout();
		return $response->withRedirect($this->router->pathFor('home.list'));
	}
	//SignIn
	public function getSignIn($request, $response)
	{
		return $this->view->render($response, 'auth/signin.twig');
	}
	public function postSignIn($request, $response)
	{

		$auth = $this->auth->attempt($request->getParam('email'), $request->getParam('password'));
		
		if (!$auth) {

			return $response->withRedirect($this->router->pathFor('auth.signin'));
		}

		return $response->withRedirect($this->router->pathFor('home.list'));
	}

	//Signup
	public function getSignUp($request, $response)
	{
		return $this->view->render($response, 'auth/signup.twig');
	}
	public function postSignUp($request, $response)
	{
		
		$params = [
			'name' => $request->getParam('fullName'),
			'email' => $request->getParam('email'),
			'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT),
		];
		$user = $this->User->create($params);
		//dd($user);
		$this->auth->attempt($request->getParam('email'), $request->getParam('password'));

		return $response->withRedirect($this->router->pathFor('home.list'));
	}
	
}