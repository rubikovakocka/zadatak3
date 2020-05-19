<?php

class User extends Model{

	public function register($parameters)
	{
		$this->insert('users', $parameters);
	}

	public function login($parameters)
	{
		return $this->checkAuth($parameters);
	}

	private function checkAuth($parameters)
	{
		$sql="select id from users
		where email='{$parameters['email']}'
		AND 
		password='{$parameters['password']}'";
		
		$statement = $this->database->prepare($sql);

		$statement->execute();

		$row = $statement->fetch();
		
		if(!empty($row)){
			return $row['id'];
		}

		return;
	}
}