<?php
	include 'backend/salt.php';
	include 'backend/core.php';

  $mail = htmlspecialchars($_GET['mail']);
  $id = htmlspecialchars($_GET['id']);
	$accept = htmlspecialchars($_GET['accept']);

	if ((strcmp($id, generate_hash($mail)) !== 0))
	{
		echo "$msg_hash_invalid";
		return;
	}

	if (insert_update_customer($mail, $id, $accept) == 1)
	{
		echo "$msg_answer_saved_successfully";
		} else {
		echo "$msg_answer_saved_failed";
	}

	echo "$msg_registration_header";

	if ($_GET['accept'] == "true")
	{
		echo "$msg_registration_true";
	} else {
		echo "$msg_registration_false";
	}

	echo "$msg_registration_footer";
?>
