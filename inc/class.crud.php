<?php
include_once 'dbconfig.php';

class CRUD
{
	public function __construct()
	{
		$db = new DB_con();
	}
	
	// function for create
	public function create($fname,$lname,$city)
	{
		mysql_query("INSERT INTO users(first_name,last_name,user_city) VALUES('$fname','$lname','$city')");
	}
	// function for create
	
	// function for read
	public function read()
	{
		return mysql_query("SELECT * FROM users ORDER BY user_id ASC");
	}
	// function for read
	
	// function for delete
	public function delete($id)
	{
		mysql_query("DELETE FROM users WHERE user_id=".$id);
	}
	// function for delete
	
	// function for update
	public function update($fname,$lname,$city,$id)
	{
		mysql_query("UPDATE users SET first_name='$fname', last_name='$lname', user_city='$city' WHERE user_id=".$id);
	}
	// function for update
}
?>