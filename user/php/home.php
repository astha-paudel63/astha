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
			<div class='cover'>
				<img src='../pic/merlin.jpg' alt='food' height='300' width='550' />
			</div>
			<div class='min-header'>
				<div class='class'>
					<div class='min-class'>
						<div class='dis'>
							<label>Food Lover's</label>
						</div>
							<p>When planning your perfect day, 
								look no further than us.Food 				
								lovers beware...you're in for a 
								tasty surprise.
							</p>
						<div class='button'>
							<a href='menu.php'>Menu Pick ></a>
						</div>
					</div>
				</div>
				<div class='class'>
					<div class='min-class'>
						<div class='dis'>
							<label>order online</label>
						</div>
								<p>get your food fast and hot.
									pick the delicious item from 
									menu.Hurryup!!! order now.
								</p>		
						<div class='button'>
							<a href='ordering.php'>order Now ></a>
						</div>
					</div>	
				</div>	
				<div class='class'>
					<div class='min-class'>
						<div class='dis'>
							<label>Say Hello</label>
						</div>
							<p>We love to meet people who want to share 
								their love of food at events, private parties 
								and more. Drop us a line or give us a call.
							</p>
						<div class='button'>
							<a href='contact.php'>Contact US ></a>
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
	

