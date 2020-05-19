<?php

class Model {
	protected $database;

	public function __construct($database)
	{
		$this->database = $database;
	}

	public function insert($table, $parameters)
	{
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(', ', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters))
		);

		try
		{
			$statement = $this->database->prepare($sql);

			$statement->execute($parameters);
		} 
		catch (Exception $e)
		{
			die('Something went wrong..');
		}
	}

	public function deleteById($table, $id)
	{
		$sql = "delete from {$table} where id = {$id}";

		try
		{
			$statement = $this->database->prepare($sql);

			$statement->execute();
		} 
		catch (Exception $e)
		{
			die('Something went wrong..');
		}
	}
}