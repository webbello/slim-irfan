<?php

namespace App\Models;

class Model {

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