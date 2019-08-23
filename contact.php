<?php
	$menu=array('home'=>'Home','menu'=>'menu','register'=>'order online','blog'=>'blog','contact'=>'contact');
?>
<!DOCTYPE html>
<html>
<head>
	<title>web desgin</title>
	<link rel="stylesheet" href="user/css/header.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/footer.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/contact.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/fontAwesome/css/font-awesome.css" type="text/css"/>
</head>
<body>
	<div class='head'>
	<div class='header-wrapper'>
		<div class='header clearfix'>	
				<div class="logo" style="background-image:url('user/pic/foodlover.png')">
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
		</div>
<div class='body'>
	<div class='bcontainer'>
		<div class='left-wapper'>
			<div class='left'>
				<div class='left-info'>
					<h1>CONTACT</h1>
				</div>	
				<div class='foodlover'>
					<h2>FoodLover</h2>
				</div>	
					<ul>
						<li>Address:	
							<span>Dhapakhel</span>
						</li>	
						<li>Number:
							<span>0123456789</span>
						</li>
						<li>
							<span>9876543210</span>
						</li>
					</ul>	
				<div class='image'style=
					"background-image:url('user/pic/contact.jpg')">
				</div>
			</div>
		</div>
		<div class='right-wapper'>
			<div class='right'>
				<div class='map-wapper'>
					<div class='map'>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.999947452957!2d85.33100361461773!3d27.62451828282626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb17178d3412ef%3A0x641c00bf2c80c940!2sNag+Daha!5e0!3m2!1sen!2snp!4v1564738925126!5m2!1sen!2snp" width="500" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>	
				</div>
				<div class='image1'style=
					"background-image:url('user/pic/contact1.jpg')">
				</div>
				
			</div>
		</div>	
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
	