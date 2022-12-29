<?php
session_start();

include("conn.php");

$user=$_POST['User'];
$pass=$_POST['Pass'];

$q="select * from login where (user='$user' or email='$user') and pass='$pass'";

$res=mysqli_query($conn,$q);

$_SESSION['username']=$user;

while($row=mysqli_fetch_array($res))
{/*
	if(($row['user']==$user || $row['email']==$user) && $row['pass']==$pass && $row['type']=="Admin")
	{
		header("location: admin.php");
	}*/
	if(($row['user']==$user || $row['email']==$user) && $row['pass']==$pass && $row['type']=="User")
	{
		header("location: user.php");
	}
}

echo "<script>alert('Invalid Username or Password');window.location.href='pandal.html';</script>";
?>