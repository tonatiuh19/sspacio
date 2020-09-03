<?php
session_start();
require_once('../../admin/cnn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$mail_i = test_input($_POST["email_f"]);
	$name = test_input($_POST["first_n"]);
	$lastname = test_input($_POST["last_n"]);
    $pwd = test_input($_POST["pwd_f"]);
    $phone = test_input($_POST["phone"]);
    $date_of_birth = test_input($_POST["date_of_birth"]);
    $type = test_input($_POST["type"]);
	
	/*if (!isset($_POST['im_busi'])) {
        // checkbox was not checked...do something
		$type = "1";
	} else {
        // checkbox was checked. Rock on!
		$type = "2";
	}*/
 //
	$today = date("Y-m-d H:i:s");

	$sql = "SELECT email FROM users where email='$mail_i'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('¡Este usuario ya existe!')
			window.location.href='../';
			</SCRIPT>");
	} else {
		$sql = "INSERT INTO users (email, name, last_name, password, user_type, created_at, date_of_birth)
		VALUES ('$mail_i', '$name', '$lastname', '$pwd', '$type', '$today', '$date_of_birth')";

		if ($conn->query($sql) === TRUE) {
            //sendmail($mail_i, $name);
            $_SESSION["email"] =	$mail_i;
            $_SESSION["type_user"] =	$type;
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.location.href='../../';
                </SCRIPT>");

            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

 }
 $conn->close();
}else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='../';
		</SCRIPT>");
}


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>