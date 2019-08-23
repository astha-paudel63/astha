<?php
	$connect=Mysqli_connect('localhost','root','','astha') or die('connection error');;
	$name=$_POST['name'];
	$address=$_POST['address'];
	$mobile=$_POST['phone'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$insert="insert into consumer(name,address,mobile,email,username,password) values('$name','$address','$mobile','$email','$username','$password')";
	mysqli_query($connect,$insert) or die('insert error');
	header("location:userlogin.php");
?>