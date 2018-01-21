<?php
	
	require_once 'core.php';

	$db = new DB("127.0.0.1", "msg.io", "root", "password" );

	if ($_SERVER['REQUEST_METHOD'] == "GET"){

		echo json_encode($db->query("SELECT `id`,`username`,`hash` FROM users"));
		http_response_code(200);

	} elseif ($_SERVER['REQUEST_METHOD'] == "POST") {

		echo "POST REQUEST";
	}else{
		http_response_code(405);
	}
	
?>