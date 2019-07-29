<?php
	$menu=array('home'=>'Home','menu'=>'menu','ordering'=>'order online','blog'=>'blog','contact'=>'contact');
?>
<!DOCTYPE html>
<html>
<head>
	<title>web desgin</title>
	<link rel="stylesheet" href="../css/header.css" type="text/css"/>
	<link rel="stylesheet" href="../css/footer.css" type="text/css"/>
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
<div class='content-wapper'>
	<div class='content'>
		<form action='' method='POST'>
			<input type='button' name='vegSnacks' value='veg' onclick='showCustomer(this);'/>
			<input type='button' name='non-vegsnacks' value='non-veg' onclick='showCustomer(this);'/>
			<input type='button' name='pizza' value='pizza' onclick='showCustomer(this);'/>
			<input type='button' name='Chowmin' value='chowmin' onclick='showCustomer(this);'/>
		</form>	
		<div id='click'></div>		
	</div>	
	
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
  xhttp.open("GET", "getmenu.php?category="+category, true);
  xhttp.send();
}
</script>
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