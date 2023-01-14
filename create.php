<?php

$app = require "./core/app.php";

// Create new instance of user
$user = new User($app->db);

$obj = array(
	'name' => $_POST['name'],
	'email' => $_POST['email'],
	'city' => $_POST['city']
);

$validationError = $user->validate($obj);
if (!$validationError->isValid) {
	echo 'Error adding user';
	echo print_r($validationError->errors);
	exit(1);
}

// Insert it to database with POST data
$user->insert($user->coalesce($obj));

// Redirect back to index
header('Location: index.php');