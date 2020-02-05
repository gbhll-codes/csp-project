<?php
include 'include/conn.php';

session_start();

if(count($_POST)>0) {
 
$result = mysqli_query($conn,"SELECT * FROM admin WHERE name='" . $_POST["username"] . "' and pass = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['name'];
}
}
if(isset($_SESSION["id"])) {
header("Location:Dashboard.php");
}
?>