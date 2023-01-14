<?php

$app = require "./core/app.php";

// Create new instance of user
$user = new User($app->db);

$obj = array(
	'name' => $_POST['name'],
	'email' => $_POST['email'],
	'phone' => $_POST['phone'],
	'city' => $_POST['city']
);

$validationError = $user->validate($obj);
if (!$validationError->isValid) {
	http_response_code(400);

	if ($app->isAjax()) {
		header('Content-Type: application/json');
		echo json_encode($validationError->errors);
	} else {
		echo 'Validation error while adding new user';
		print_r($validationError->errors);
	}
} else {
	// Insert it to database with POST data
	$user->insert($user->coalesce($obj));

	if ($app->isAjax()) {
		// Send fresh coalesced data to client
		$newUserId = $user->getId();
		$newUser = User::find($app->db,'*', ['id' => $newUserId])[0];
		header('Content-Type: application/json');
		echo json_encode([
			'name' => $newUser->getName(),
			'email' => $newUser->getEmail(),
			'phone' => $newUser->getPhone(),
			'city' => $newUser->getCity()
		]);
	} else {
		// Redirect back to index
		header('Location: index.php');
	}
}