<?php 
	$db = new PDO("mysql:host=localhost;dbname=db_mvc", 'root', '');
	$member = $db->prepare('SELECT id, name FROM member');
	$member->execute();
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Member List</title>
	</head>
	<body>
		<h1>Member List</h1>
		<ul>
			<?php foreach ($member->fetchAll() as $row): ?>
				<li>
					<a href="detail.php?id=<?= $row['id'] ?>">
						<?= $row['name'] ?>
					</a>
				</li>
			<?php endforeach ?>
		</ul>
	</body>
	</html>	

<?php $db = null; ?>