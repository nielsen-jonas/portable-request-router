<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Portable request router</title>
		<link rel="stylesheet" type="text/css" href="<?= SRC_CSS . 'style.css' ?>">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
	</head>
	<body>
		<h1>Index script</h1>
		<p>Enter the following URL, type must be alphabetic and id must be numeric:</p>
		<em><?= WEBSITE_URL ?>/dynamic/{type}/{id}</em>
		<ul>
		<?php foreach($_REQUEST as $key => $val): ?>
			<li>Key: <?= $key ?>, Value: <?= $val ?></li>
		<?php endforeach; ?>
		</ul>
	</body>
<html>