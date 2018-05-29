<?php
$servername = "localhost";
$username = "aisoftwo_contact";
$password = "Processes2018!";
$dbname = "aisoftwo_contact";

$pn = $_GET["pn"];
$uid = $_GET["uid"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$insert = "DELETE FROM contact WHERE uid = " . $uid ." AND number = " . $pn;

if ($conn->query($insert) === TRUE) {
    echo "record deleted successfully";
} else {
    echo "Error: " . $insert . "<br>" . $conn->error;
}

$conn->close();
?>
