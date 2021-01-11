<?php
$con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','Nidhi');

// get the post records
$Name = $_POST['Name'];
$AboutMe = $_POST['AboutMe'];
$Email = $_POST['Email'];
$Linkedin = $_POST['Linkedin'];
$Image=$_POST['Image'];

// database insert SQL code
$sql = "INSERT INTO n1 ( 'Name', 'AboutMe', 'Email', 'Linkedin') VALUES ('$Name', '$AboutMe', '$Email', '$Linkedin')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
?>
