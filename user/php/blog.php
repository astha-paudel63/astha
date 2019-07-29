<?php
	$menu=array('home'=>'Home','menu'=>'menu','ordering'=>'order online','blog'=>'blog','contact'=>'contact');
?>
<!DOCTYPE html>
<html>
<head>
	<title>web desgin</title>
	<link rel="stylesheet" href="../css/header.css" type="text/css"/>
	<link rel="stylesheet" href="../css/footer.css" type="text/css"/>
	<link rel="stylesheet" href="../css/blogs.css" type="text/css"/>
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
<div class="blogs">
			<div class="container">
				<div class="description">
					<div class="image" style="background-image:url('../pic/raspberry-layer-cake-dixie.jpg')">
					</div>
					<div class="detail">
						<h2>Fresh Corn Cake with Raspberries </h2>
						<h3>Oct. 9, 2018 </h3>
						<h2>Admin</h2>
						<p>Puréed fresh corn adds unique sweetness to this dessert. Tossing the raspberries with a small amount of flour prevents them from sinking to the bottom of the cake.</p>
					</div>
				</div>
				<div class="description">
					<div class="image" style="background-image:url('../pic/image.jpg')">
					</div>
					<div class="detail">
						<h2> Miso Caramel-Apple Pie</h2>
						<h3>June 19, 2012 </h3>
						<h2>Admin</h2>
						<p>If you love salted caramel, you seriously have to try adding miso to your next batch. The unexpected umami of miso pairs perfectly with sweet-tart apples in this rich makeover of an autumnal dessert favorite.</p>
					</div>
				</div>
				<div class="description">
					<div class="image" style="background-image:url('../pic/soup.jpg')">
					</div>
					<div class="detail">
						<h2>One-Hour Spanish Chickpea Soup </h2>
						<h3>Sept. 4, 2011</h3>
						<h2>Nicman</h2>
						<p>Sure, dried peas and beans are far more economical and lower in sodium than their canned cousins, but who has time to soak them overnight and then simmer for hours? With a pressure cooker, this satisfying chickpea-and-chorizo soup starts with dried chickpeas and is ready in just 60 minutes. </p>
					</div>
				</div>
				<div class="description">
					<div class="image" style="background-image:url('../pic/pork.jpg')">
					</div>
					<div class="detail">
						<h2> Slow-Cooked BBQ Pork Roast </h2>
						<h3>Nov. 30, 2010</h3>
						<h2>TomaszProszek</h2>
						<p>Too cold outside to start up the grill? Your trusty slow cooker makes this pork roast possible. Spiced with paprika, cumin, ground coriander, and garlic, this beautiful roast gets tang and sweetness from ketchup in the glaze.</p>
					</div>
				</div>
				<div class="button1">
					<a href="blogsnext.php" class="border-button">Load More</a>
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
	