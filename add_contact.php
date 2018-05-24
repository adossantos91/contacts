<?php
$servername = "localhost";
$username = "aisoftwo_contact";
$password = "Processes2018!";
$dbname = "aisoftwo_contact";

$fn = $_GET["fn"];
$ln = $_GET["ln"];
$pn = $_GET["pn"];
$uid = $_GET["uid"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$insert = "INSERT INTO contact (uid, fname, lname, number)
VALUES (" . $uid .", " . $fn .", " . $ln .", " . $pn . ")";

if ($conn->query($insert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . $conn->error;
}

$conn->close();
?>
