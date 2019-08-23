<?php
	$menu=array('home'=>'Home','menu'=>'menu','register'=>'order online','blog'=>'blog','contact'=>'contact');
?>
<!DOCTYPE html>
<html>
<head>
	<title>web desgin</title>
	<link rel="stylesheet" href="user/css/header.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/footer.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/blogs.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/fontAwesome/css/font-awesome.css" type="text/css"/>
	
</head>
<body>
	<div class='header-wrapper'>
		<div class='header clearfix'>	
				<div class="logo" style="background-image:url('user/php/foodlover.png')">
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
					<div class="image" style="background-image:url('user/pic/old-fashioned-meat-loaf.jpg')">
					</div>
					<div class="detail">
						<h2> Old-fashioned Meatloaf </h2>
						<h3>Oct. 9, 2018 </h3>
						<h2>Admin</h2>
						<p>This list wouldn’t be complete without including a classic ketchup-topped meatloaf. With a perfect five-star rating, this recipe is a guaranteed crowd-pleaser. A little bit of Worcestershire sauce spices up the ketchup, and the meat is seasoned with a combination of Creole and Greek spices.</p>
					</div>
				</div>
				<div class="description">
					<div class="image" style="background-image:url('user/pic/stew.jpg')">
					</div>
					<div class="detail">
						<h2>Curried Lentil-and-Vegetable Stew</h2>
						<h3>June 19, 2012 </h3>
						<h2>Admin</h2>
						<p>Ketchup is the surprise ingredient in this Indian-inspired stew, and it fits right in: The fruity condiment adds just enough vinegary tang and sweetness to round out this hearty, meatless meal.</p>
					</div>
				</div>
				<div class="description">
					<div class="image" style="background-image:url('user/pic/v-wkvegmar0501-1leadweb.jpg')">
					</div>
					<div class="detail">
						<h2>Pulled Chicken Sandwiches</h2>
						<h3>Sept. 4, 2011</h3>
						<h2>Nicman</h2>
						<p>These sandwiches feel like a special treat, but come together effortlessly in your slow cooker. They’re tender, melt-in-your-mouth, and use pantry staples for a family-favorite meal that works for lunch or dinner. </p>
					</div>
				</div>
				<div class="description">
					<div class="image" style="background-image:url('user/pic/omelete.jpg')">
					</div>
					<div class="detail">
						<h2> Cheeseburger Omelet </h2>
						<h3>Nov. 30, 2010</h3>
						<h2>TomaszProszek</h2>
						<p>Go into full-on diner mode for weekend brunch (or any meal of the day) with this over-the-top omelet that hits all of your cheeseburger cravings. Bacon, caramelized onions,  French fries, and (of course) a ketchup drizzle make this omelet next-level delicious.</p>
					</div>
				</div>
		</div>
		<div class="button1">
					<a href="blog.php" class="border-button">previous </a>
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
	