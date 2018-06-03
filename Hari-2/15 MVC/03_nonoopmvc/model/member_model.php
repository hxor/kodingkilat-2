<?php 

	function openDBConnection()
	{
		$db = new PDO("mysql:host=localhost;dbname=db_mvc", 'root', '');
		return $db;
	}

	function closeDBConnection($db)
	{
		$db = null;
	}

	function getAllMember()
	{
		$db = openDBConnection();

		$query = $db->prepare('SELECT id, name FROM member');
		$query->execute();

		$member = [];
		foreach ($query->fetchAll() as $row) {
			$member[] = $row;
		}

		closeDBConnection($db);


		return $member;
	}

 ?>