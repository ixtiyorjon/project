<?php
	require_once('config.php');
	use model\Buttons;
	use model\Functions;

		$update = file_get_contents("php://input");
		$update = json_decode($update, true);

		$chat_id = $update["message"]["chat"]["id"];
		$text = $update["message"]["text"];
	$send = new  Functions::sendMessage($chat_id)
?>