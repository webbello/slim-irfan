<?php

namespace App\Controllers;

class ListController extends Controller
{
	
	public function index($request, $response, $args)
	{
		
		$list = $this->Coordinator->getList('dr.abhaykumar@gmail.com');
		//dd($list);
		$data = ['irfan' => 4444];
		//Twig View
    	return $this->view->render($response, 'base/base.html.twig', $data);
	}
}