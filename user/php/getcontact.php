<?php
	$connect=mysqli_connect('localhost','root','','astha') or die('connection error');
	$create_tb='create table if not exists consumer(c_id int primary key auto_increment,name varchar(40),address varchar(40),mobile char(10),email varchar(30),message varchar(100))';
	mysqli_query($connect,$create_tb)or die('create error');
	$name=$_POST['txtname12'];
	$address=$_POST['txtaddress12'];
	$phone=$_POST['txtphone12'];
	$email=$_POST['txtemail12'];
	$message=$_POST['textmessage'];
	$db_insert="insert into consumer(name,address,mobile,email) values('$name','$address','$phone','$email','$message')";
	mysqli_query($connect,$db_insert);
?>