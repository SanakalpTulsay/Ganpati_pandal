<?php

include("conn.php");

$a=$_POST['lemail'];
$b=$_POST['luser'];
$c=$_POST['lpass'];
$d=$_POST['lcpass'];

$e="User";


$query="select * from login where email='$a'";

$sql=mysqli_query($conn,$query);

$check=mysqli_num_rows($sql);


if($check > 0)
{
	echo "<script>alert('email is already taken');window.location.href='pandal.html';</script>";
	
}
else
{
	$q="insert into login(email,user,pass,cpass,type) values('$a','$b','$c','$d','$e')";

	$res=mysqli_query($conn,$q);

	if($res)
	{
		echo "<script>alert('User Created Successfully');window.location.href='pandal.html';</script>";
		//header("location: RegisterForm.php");
	}
}
?>