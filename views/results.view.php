<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		<?php include 'views/css/style.css'; ?>
	</style>
	<meta charset="UTF-8">
	<title>Results</title>
</head>
<body>
	<h1>Results found:</h1>

	<ul>
		<table style="width:50%; text-align: center;" border="" align="center">
		<tr>
			<th>E-mail</th>
			<th>Name</th>
		</tr>
		<?php foreach ($results as $result) : ?>
				<tr>
					<td><?= $result->email; ?></td>
					<td><?= $result->name; ?></td>
				</tr>
			
		<?php endforeach; ?>
		</table>
	</ul>

	<form action="/" style="text-align: center;">
		<button>Go Back</button>
	</form>
</body>
</html>