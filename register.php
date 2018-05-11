<?php
	$mail0 = htmlspecialchars($_POST['mail0']);
	$mail1 = htmlspecialchars($_POST['mail1']);

	include 'backend/salt.php';
	$id_hash = generate_hash($mail0);

	$link_registration_yes = "/registration.php?mail=$mail0&id=$id_hash&accept=true";
	$link_registration_no = "/registration.php?mail=$mail0&id=$id_hash&accept=false";

	// important to include after getting vars, cuz these are expanded within core.php
	include 'backend/core.php';

	echo "$mail_send_header";

	if (check_if_mail_is_valid($mail0, $mail1))
	{
		send_mail($from, $reply_to, $mail0, $betreff_registration, $msg_registration);
		echo "$mail_send_successfully";
	} else {
		echo "$mail_send_failed";
	}
?>
