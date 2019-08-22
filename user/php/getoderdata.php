<?php
	$connect=mysqli_connect('localhost','root','','astha')or die('database connect error');
	$create='create table if not exists oderdata(c_id int primary key auto_increment,menuID int auto_increment,quantity varchar(20))';
	mysqli_query($connect,$create) or die ('create table error');
	
?>