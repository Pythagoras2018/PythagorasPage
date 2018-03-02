<?php

	$destino = ($_P)

	$name    = ($_POST['name']);
    $email   = ($_POST['email']);
    $subject = ($_POST['subject']);
    $message = ($_POST['message']);

	$headers = 'From: '.$destino."\r\n".
	'Reply-To:'.$destino."\r\n".
	'X-Mailer: PHP/'.phpversion();

	mail('pythagorasv2018@gmail.com', $name, $email, $subject, $message)

?>