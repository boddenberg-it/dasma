<?php

include 'config.php';

function insert_update_customer($mail, $id, $accept)
{
	$time = time();

	$sql = <<<EOL
INSERT INTO customers (mail, answer, api_hash, last_change_timestamp) VALUES("$mail", $accept, "$id", $time) ON DUPLICATE KEY UPDATE answer=$accept, last_change_timestamp=$time;
EOL;

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
	global $servername;
	global $username;
	global $password;
	global $dbname;

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
	global $servername;
	global $username;
	global $password;
	global $dbname;

//	$conn = new mysqli($servername, 'd02a5269', 'LqaR3NcPSFyGAVXx', 'd02a5269');
	$conn = new mysqli($servername, $username, $password, $dbname);

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

