<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Member List</title>
</head>
<body>
	<h1>Member List</h1>
	<ul>
		<?php foreach ($member as $row): ?>
			<li>
				<a href="detail.php?id=<?= $row['id'] ?>">
					<?= $row['name'] ?>
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</body>
</html>