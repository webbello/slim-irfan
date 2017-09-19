<?php

namespace App\Models;

class Coordinator extends Model
{
	public function getList($value='')
	{

        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;
	}

    public  function attempt($file='')
    {
        $this->db->query('SELECT email FROM '. $this->db->table('users'). ' WHERE email = :email');
        $this->db->bind(':email', $file);
        $email = $this->db->getOne();
        return $email;
    }
}