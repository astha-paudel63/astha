<?php
	$menu=array('home'=>'Home','menu'=>'menu','ordering'=>'order online','blog'=>'blog','contact'=>'contact');
?>
<!DOCTYPE html>
<html>
<head>
	<title>web desgin</title>
	<link rel="stylesheet" href="../css/header.css" type="text/css"/>
	<link rel="stylesheet" href="../css/home.css" type="text/css"/>
	<link rel="stylesheet" href="../css/footer.css" type="text/css"/>
	<link rel="stylesheet" href="../css/contact.css" type="text/css"/>
	<link rel="stylesheet" href="../css/blogs.css" type="text/css"/>
	<link rel="stylesheet" href="../css/menu.css" type="text/css"/>
	<link rel="stylesheet" href="../css/fontAwesome/css/font-awesome.css" type="text/css"/>
	
</head>
<body>
	<div class='header-wrapper'>
		<div class='header clearfix'>	
				<div class="logo" style="background-image:url(foodlover.png)">
				</div>
			<div class='nav-menu'>
				<ul>
					<?php
						foreach($menu as $key=>$value)
						{
							
						echo "<li><a href='$key.php'>".$value."</a></li>";
					
						}
					?>
				</ul>
			</div>
		</div>
		</div>