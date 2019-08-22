<?php
	$menu=array('home'=>'Home','menu'=>'menu','ordering'=>'order online','blog'=>'blog','contact'=>'contact');
?>
<!DOCTYPE html>
<html>
<head>
	<title>web desgin</title>
	<link rel="stylesheet" href="../css/header.css" type="text/css"/>
	<link rel="stylesheet" href="../css/footer.css" type="text/css"/>
	<link rel="stylesheet" href="../css/ordering.css" type="text/css"/>
	<link rel="stylesheet" href="../css/fontAwesome/css/font-awesome.css" type="text/css"/>
	
</head>
<body>
<div class='head'>
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
</div>		
			<form action='' method='POST'>
<div class='main'>
	<div class='content-wapper'>
		<div class='content'>
				<ol>
					<li>
						<input type='button' name='VEG-snacks' value='VEG-snacks' onclick='showCustomer(this);'/>
					</li>
					<li>
						<input type='button' name='NON-VEG-snacks' value='NON-VEG-snacks' onclick='showCustomer(this);'/>
					</li>
					<li>
						<input type='button' name='PIZZA' value='PIZZA' onclick='showCustomer(this);'/>
					</li>
					<li>
						<input type='button' name='CHOWMIN' value='CHOWMIN' onclick='showCustomer(this);'/>
					</li>
					<li>
						<input type='button' name='MOMO' value='MOMO' onclick='showCustomer(this);'/>
					</li>
					<li>
						<input type='button' name='CHOPUEY' value='CHOPUEY' onclick='showCustomer(this);'/>
					</li>
					<li>
						<input type='button' name='THUKPA' value='THUKPA' onclick='showCustomer(this);'/>
					</li>
					<li>
						<input type='button' name='SEKUWA' value='SEKUWA' onclick='showCustomer(this);'/>
					</li>
					<li>
						<input type='button' name='COLD BEVERAGE' value='COLD BEVERAGE' onclick='showCustomer(this);'/>
					</li>
				</ol>	
					
		</div>
	</div>	
	<div class='click-wapper'>
		<div class='wapper'>
			<div id='click'></div>		
		</div>
	</div>
	<div class='pic-wapper'>
		<div class='pic'>
			<div class="image" style="background-image:url('../pic/order1.png')">
			</div>
			<div class="image" style="background-image:url('../pic/order2.png')">
			</div>
			<div class="image" style="background-image:url('../pic/order3.png')">
			</div>
		</div>
		<div class='confirm'>
			<input type='button' name='submit' value='Confirm' onclick='showbill(this);'/>
		</div>
	</div>
		
</div>	
	</form>	
		
	<script>
	function showCustomer(control) {
	  var xhttp;
		category=control.value;
	  if (category == "") {
		document.getElementById("click").innerHTML = "abc";
		return;
	  }
	  xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  document.getElementById("click").innerHTML = this.responseText;
		}
	  };
	  xhttp.open("GET", "getodering.php?category="+category, true);
	  xhttp.send();
	}
	function showbill(control) {
	  var xhttp;
		category=control.value;
	  if (category == "") {
		document.getElementById("click").innerHTML = "abc";
		return;
	  }
	  xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  document.getElementById("click").innerHTML = this.responseText;
		}
	  };
	  xhttp.open("GET", "getodering.php?category="+category, true);
	  xhttp.send();
	}
	</script>
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