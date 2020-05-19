<?php

require 'Model.php';

class News extends Model{

	public function all()
	{
		$sql = "select * from news";

		$statement = $this->database->prepare($sql);

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function delete($new_id)
	{
		$this->deleteById('news', $new_id);
	}
}