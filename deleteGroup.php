<?php
$client = require __DIR__ . '/lib/bootstrap.php';
if(isset($_GET['gp']))
	$response = $client->deleteGroup($_GET['gp']);
echo json_encode($response);