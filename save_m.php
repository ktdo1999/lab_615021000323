<?php
require_once "connection.php";

$m_name=$_POST['m_name'];
$date=$_POST['date'];

$sql1=" INSERT INTO moive(m_name,date) VALUES ('$m_name','$date')";
$reult1=mysqli_query($conn,$sql1);
header("Location: admin_page.php");
?>