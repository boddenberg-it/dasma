<?php

include 'config.php';

function insert_update_customer($name, $company, $mail, $id, $accept)
{
	$time = time();
	$sql = <<<EOT
INSERT INTO customers (name, company, mail, answer, api_hash, last_change_timestamp)
VALUES($name, $company, $mail, $accept, $id, $time)
ON DUPLICATE KEY UPDATE name="$name", company="$company", mail="$mail", answer=$accept, api_hash="$id", last_change_timestamp=$time
EOT;

echo "$sql";

// check wheter with semicolon at the end or not!

//	return insert_query($name, $company, $mail, $id, $accept, time());
	return insert_query($sql);
}

function send_mail($from, $reply_to, $empfaenger, $betreff, $nachricht)
{
	$header = "From: $from" . "\r\n" .
		"Reply-To: $reply_to" . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($empfaenger, $betreff, $nachricht, $header);
}

function check_if_mail_is_valid($m0, $m1)
{
	if (strcmp($m0, $m1) !== 0) { return false; }
	if (!filter_var($m0, FILTER_VALIDATE_EMAIL)) { return false; }
	return true;
}

// returns resutl to loop over...
function query_db($sql)
{
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	//$sql = "SELECT * FROM customers";
	$result = $conn->query($sql);

	//return $result;
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["name"]. " - Name: " . $row["mail"]. " " . $row["last_changed_timestamp"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
}

// returns boolean  about query success
function insert_query($query)
{
	$conn = new mysqli($servername, 'd02a5269', 'LqaR3NcPSFyGAVXx', 'd02a5269');

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if ($conn->query($query) === TRUE) {
		$conn->close();
		return true;
	} else {
		$conn->close();
		return false;
	}
}

?>

