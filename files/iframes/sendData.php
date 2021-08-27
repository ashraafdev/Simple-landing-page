<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "win_macbook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['sendData'])) {
  
    $firstName = $_POST['F_Name'];
    $lastName = $_POST['L_Name'];
    $eMail = $_POST['EMail'];
    $phoneNum = $_POST['Phone_Num'];

    $sql = "INSERT INTO data (FirstName, LastName, EMail, PhoneNum) VALUES ('$firstName', '$lastName', '$eMail', '$phoneNum')";
    $conn->query($sql);

  }
?>