<?php

	$destino = ($_P)

	$name    = ($_POST['name']);
    $email   = ($_POST['email']);
    $subject = ($_POST['subject']);
    $message = ($_POST['message']);

	

	mail('pythagorasv2018@gmail.com', $name, $email, $subject, $message)

?>