<?php

namespace App\Controllers;

class Controller
{
	protected $container;

	public function __construct($container){
	    $this->container = $container;
	}
	/**
	 * [__get description]
	 * @param  [type] $property [description]
	 * @return [type]           [description]
	 */
	public function __get($property)
	{
		if ($this->container->{$property}) {
			return $this->container->{$property};
		}
	}
}