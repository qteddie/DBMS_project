<?php

// ******** update your personal settings ******** 
$servername = "localhost";
$username = "team9";
$password = "team9";
$dbname = "team9";

// Connecting to and selecting a MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// do sql query

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];

    $sql = "insert into signin (name, email, phone, country) values ('$name', '$email', '$phone', '$country')";

	

    // Check if a record with matching values exists
    $sql = "SELECT * FROM signin WHERE name='$name' AND email='$email' AND phone='$phone' AND country='$country'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Record with matching values exists in database
        // echo "Record exists in database";
        header("Location: login.php");
    } else {
        // Record with matching values does not exist in database
        header("Location: signin_successfully.php");
    }

}else{
	echo "資料不完全";
}
				
?>