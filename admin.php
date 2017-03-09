<?php
session_start();
if(isset($_GET['action']))
{
	if($_GET['action']=="logout")
     {
     	unset($_SESSION['admin']);
     }
}




if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=sha1($_POST['password']);
	$query="select *from user where username='$username' and password='$password'";
	$result =mysqli_query($connection,$query)or die("error querying");
	$result_main=mysqli_fetch_assoc($result);
	if($result)
	{
		$_SESSION['admin']=$result_main['username'];
	}

}


if(isset($_SESSION['admin']))
{
	include 'cpanel.php';
}
else
{
	include("login.php");
}
?>