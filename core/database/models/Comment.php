<?php

class Comment extends Model{
	
	public function allFor($new_id)
	{
		$sql = 'SELECT * FROM comments 
				WHERE news_id = ' . $new_id;

		$statement = $this->database->prepare($sql);

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function add($parameters)
	{
		$this->insert('comments', $parameters);
	}

	public function delete($comment_id)
	{
		$this->deleteById('comments', $comment_id);
	}
}