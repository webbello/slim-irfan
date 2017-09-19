<?php

namespace App\Auth;

use App\Controllers\Controller;

class Auth extends Controller
{
	
	public function user()
	{
		
		if (isset($_SESSION['user'])) {
			$user = $this->User->findBy(['id'=> $_SESSION['user']]);
		}else{
			$user = [];
		}
		//$user = $this->User->findBy(['id'=> $_SESSION['user']]);
		//dd($user);
		return $user;
	}

	public function check()
	{
		return isset($_SESSION['user']);
	}

	public function attempt($email, $password)
	{
		
		$user = $this->User->findBy(['email'=>$email]);
		if (!$user) {
			return false;
		}

		if (password_verify($password, $user['password'])) {
			$_SESSION['user'] = $user['id'];
			return true;
		}

		return false;
	}
	public function logout()
	{
		unset($_SESSION['user']);
	}
}