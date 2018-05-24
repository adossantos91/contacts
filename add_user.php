<?php
$servername = "localhost";
$username = "aisoftwo_contact";
$password = "Processes2018!";
$dbname = "aisoftwo_contact";

$uname = $_GET["username"];
$upass = $_GET["password"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ucount_query = $conn->query("select uid from users");





$ucount = mysqli_num_rows($ucount_query);
$ucount+=1;
$insert = "INSERT INTO users (uname, pass, uid)
VALUES (\"" . $uname ."\", \"" . $upass ."\",\" " . $ucount ."\")";

if ($conn->query($insert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . $conn->error;
}

$conn->close();
?>
