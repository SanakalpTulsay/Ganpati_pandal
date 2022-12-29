<?php
include("conn.php");

$a=$_POST['Title'];
$b=$_POST['Des'];
$c=$_POST['State'];
$d=$_POST['Elink'];
$e=$_POST['Mlink'];

$filename=$_FILES["uploadfile"]["name"];

$tempname=$_FILES["uploadfile"]["tmp_name"];

$folder="Images/".$filename;

move_uploaded_file($tempname,$folder);


$query="insert into addpandal(title,des,photo,state,elink,mlink) values('$a','$b','$folder','$c','$d','$e')";

$res=mysqli_query($conn,$query);

if($res)
{
	echo "<script>alert('Save Success');window.location.href='user.php';</script>";
}
else
{
	echo "something went wrong";
}
?>