<?php

namespace App\Models;

class User extends Model
{
	public function create($params = [])
	{
        $stmt = $this->db->prepare("INSERT INTO users (name, email, password, status)
        VALUES ('".$params["name"]."','".$params["email"]."','".$params["password"]."', 1)");
        $stmt->execute();
	}
	public function findAll()
	{
        $stmt = $this->db->prepare("SELECT * FROM  users ");
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;
	}
	public function findBy($params = [])
	{
		//dd($params);
		$sql = "SELECT * FROM  users WHERE status = 1 ";

		foreach ($params as $key => $value) {
			
			$sql .= "AND $key = '$value'";
		}
	
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $result = $stmt->fetch();
        return $result;
	}

}