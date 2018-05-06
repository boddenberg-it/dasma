<p>Thanks for your reply!</p>
<br>
<br>
<p>
<?php
	include 'backend/salt.php';
	include 'backend/core.php';

        $mail = $_GET['mail'];
        $id = $_GET['id'];
	$accept = $_GET['accept'];

	if ((strcmp($id, generate_hash($mail)) !== 0))
	{
		echo "ERROR: somebody is tampering with the hash...";
		return;
	}

	if (insert_update_customer($mail, $id, $accept) == 1)
	{
		echo "Your answer has been saved! We will take actions accordingly.";
	} else {
		echo "Something went wrong. Please contact it-support@membrapure.de by sending your registration links";
	}
?>
</p>
