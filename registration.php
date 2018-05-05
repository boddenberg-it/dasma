<p>YEAH WAS GETH STEILT!!!!</p>

<?php
	include 'backend/salt.php';
	include 'backend/core.php';

        // get vars
        $name = $_GET['name'];
        $company = $_GET['company'];
        $mail = $_GET['mail'];
        $id = $_GET['id'];
	$accept = $_GET['accept'];

	echo "Hallo Welt! was geht steil alter!!!";

//	echo 'Hallo ' . htmlspecialchars($_GET["name"]) . '!';

	echo "$name   $company   $mail   $id    $accept";

	if ((strcmp($id, generate_hash($mail)) !== 0))
	{
		echo "ERROR: somebody is tampering here... ò.Ó";
		return;
	}

	echo "id is correct";

	echo insert_update_customer($name, $company, $mail, $id, $accept);
?>

