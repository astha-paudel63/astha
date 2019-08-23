<?php
$a=mysqli_connect('localhost','root','','astha')or die('database connect error');
$create='create table if not exists orderdata(cid int,category varchar(50),menuitem varchar(60),price int,quantity int,amount int)';
mysqli_query($a,$create) or die('create error');