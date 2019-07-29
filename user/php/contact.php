<?php
	$menu=array('home'=>'Home','menu'=>'menu','ordering'=>'order online','blog'=>'blog','contact'=>'contact');
?>
<!DOCTYPE html>
<html>
<head>
	<title>web desgin</title>
	<link rel="stylesheet" href="../css/header.css" type="text/css"/>
	<link rel="stylesheet" href="../css/footer.css" type="text/css"/>
	<link rel="stylesheet" href="../css/contact.css" type="text/css"/>
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
<div class='body'>
	<div class='left-wapper'>
		<div class='left'>
			<div class='left-info'>
				<h1>CONTACT</h1>
			</div>	
			<div class='foodlover'>
				<h2>FoodLover</h2>
			</div>	
				<ul>
					<li>Address:Dhapakhel,lalitpur</li>
					<li>Number:0123456789</li>
					</ul>	
			<div class='image'>
			</div>
		</div>
	</div>
	<div class='right'>
		<div class='map'>
		</div>
		<div class='form'>
			<form action='' method='post'>
				<input type='text' name='name' placeholder='NAME*'/>
				<input type='email' name='email' placeholder='EMAIL*'/>
				<input type='text' name='address' placeholder='ADDRESS*'/>
				<input type='text' name='phone' placeholder='PHONE*'/>
				<button>submit</button>
			</form>	
		</div>
</div>		

	

<footer>
            <div class="container">
                <ul class="footer-widget clearfix">
                    <li>
                        <span class="icon"><i class="fa fa-map-marker"></i></span>
                        <span class="caption">Dhapakhel</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-paper-plane"></i></span>
                        <span class="caption">foodlover07@gmail.com</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-phone"></i></span>
                        <span class="caption">0123456789</span>
                    </li>
                    
                    <li>
                        
                        <span class="caption">Copyright &copy; All right reserve</span>
                    </li>
                    
                </ul>
                        
            </div>
        </footer>	
</body>
</html>		
	