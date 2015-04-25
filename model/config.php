<?php
	require_once(__DIR__ . "/Database.php");
	session_start();
	session_regenerate_id(true);

	$path = "/todo-list2/"; //* Sets a path to the Blog Folder 

	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "todo2";

	if(!isset($_SESSION["connection"])) {
		$connection = new Database($host, $username, $password, $database);
		$_SESSION["connection"] = $connection;
	}

?>