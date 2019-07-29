<?php 
	$connect= mysqli_connect('localhost','root','','astha') or die('connection error');
	$table='create table if not exists menu(menuID int primary key auto_increment,category varchar(30),menuitem varchar(40),price int)';
	mysqli_query($connect,$table) or die('table error');
	$category=$_POST['food'];
	$menuitem=$_POST['menuitem'];
	$price=$_POST['price'];
	$store="insert into menu(category,menuitem,price) values('$category','$menuitem','$price')";
	mysqli_query($connect,$store);
	
	
	
	
	

?>