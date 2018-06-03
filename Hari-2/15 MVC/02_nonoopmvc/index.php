<?php //separating logic and view
	$db = new PDO("mysql:host=localhost;dbname=db_mvc", 'root', '');
	$query = $db->prepare('SELECT id, name FROM member');
	$query->execute();

	$member = [];
	foreach ($query->fetchAll() as $row) {
		$member[] = $row;
	}

	$db = null;

	require 'view/member/index.php';
?>
