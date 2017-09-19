<?php
namespace App\Controllers;

use App\Models\Coordinator;

class ImageDirController 
{

	private $db;

	public function __construct($db){
	    $this->db = $db;

	} 
	public function directories($directory)
	{
	    $glob = glob($directory . '/*');
	    $directories = glob($directory . '/*' , GLOB_ONLYDIR);

	    if($glob === false)
	    {
	        return array();
	    }

	    return array_filter($glob, function($dir) {
	        return is_dir($dir);
	    });

	    //return $directories;
	}

	public function dir($dir ,$depth) {

		//$user =  new Coordinator();
		//$email = $user->attempt('myemail@domain.com');
		dd($this->db);

		$directories = $this->directories($dir);
		$dirArr = [];
		foreach ($directories as $key => $value) {
			$s = explode("/",$value);
			$dirArr[] = $s[$depth];
		}
		//dd($dirArr);
		return $dirArr;
	}
}