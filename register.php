<?php
?>

Thanks for blakeks!!!<br><br>

Hallo <?php echo $_POST['name']; ?>.
Sie sind <?php echo $_POST['company']; ?> Jahre alt.
Sie sind <?php echo $_POST['mail0']; ?> Jahre alt.
Sie sind <?php echo $_POST['mail1']; ?> Jahre alt.

<?php
	// get vars
	$name = $_POST['name'];
	$company = $_POST['company'];
	$mail0 = $_POST['mail0'];
	$mail1 = $_POST['mail1'];

	include 'backend/salt.php';
	$id_hash = generate_hash($mail0);

	$link_registration_yes = "/registration.php?name=$name&company=$company&mail=$mail0&id=$id_hash&accept=true";
	$link_registration_no = "/registration.php?name=$name&company=$company&mail=$mail0&id=$id_hash&accept=false";

	// important to include after getting vars, cuz these are expanded within core.php
	include 'backend/core.php';

	// is mail valid?
	if (check_if_mail_is_valid($mail0, $mail1))
	{
		// send registration mail
		send_mail($from, $reply_to, $mail0, $betreff_registration, $msg_registration);
		echo "Successfully registered. You will receive a mail with further instructions soon.";
	} else {
		echo "ERROR: mail is not a valid mail address!";
	}
?>
