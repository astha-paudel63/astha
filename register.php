<?php
	$menu=array('home'=>'Home','menu'=>'menu','register'=>'order online','blog'=>'blog','contact'=>'contact');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>web desgin</title>
	<link rel="stylesheet" href="user/css/header.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/footer.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/button.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/register.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/fontAwesome/css/font-awesome.css" type="text/css"/>
	<script type="text/javascript">
	function validate(form){
				var a = true;
				var name = form.name.value;
				var username = /^[a-zA-Z ]+$/;
				if(name==''||name.length==0)
				{
					a = false;
					form.getElementsByClassName('name-msg')[0].innerHTML = "Name should not be blank";
				}
				else{
					if(!name.match(username))
					{
						a = false;
						form.getElementsByClassName('name-msg')[0].innerHTML = "Name should have only alphabet and space";
					}
				}
				
				var ad = form.address.value;
				if(ad==""||ro.length==0)
				{
					a = false;
					form.getElementsByClassName('address-msg')[0].innerHTML = " address should not be blank";
				}
				var ph = form.phone.value;
				var pho = /^[0-9]+$/;
				if(ph.length!=10)
				{
					a = false;
					form.getElementsByClassName('phone-msg')[0].innerHTML = "Please Enter 10 digit number";
				}
				else{
					if(!ph.match(pho))
					{
						a = false;
						form.getElementsByClassName('phone-msg')[0].innerHTML = "Invalid format Please re-enter number";
					}
				}
				
				var em = form.email.value;
				if(em==""||em.length==0)
				{
					a = false;
					form.getElementsByClassName('email-msg')[0].innerHTML = "Email Should not be Blank";
				}
				var user = form.username.value;
				if(user==""||user.length==0)
				{
					a = false;
					form.getElementsByClassName('user-msg')[0].innerHTML = "username Should not be Blank";
				}
				var pas = form.password.value;
				var cpas = form.cpassword.value;
				if(pas==""||pas.length==0){
					a = false;
					form.getElementsByClassName('password-msg')[0].innerHTML = "Password Should not be Blank";
				}
				if(cpas==""||cpas.length==0){
					a = false;
					form.getElementsByClassName('cpassword-msg')[0].innerHTML = "Password Should not be Blank";
				}
				
				return a;
			}
	</script>		
	</head>
	<body>
		<div class='head'>
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
</div>
		
		<div class="signup-form">
			<div class="signup-form-wrapper">
				<h3>Enter Your Details</h3>
				<form action='getregister.php' method='post' onsubmit="return validate(this);">
					<div class='input-group'>
						<label>Name</label>
						<input type='text' name='name' placeholder="Your Name Here"/>
						<span class="name-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label>Address</label>
						<input type='text' name='address' placeholder="Your address Here"/>
						<span class="address-msg" style="color: red;"></span>
					</div>
					<div class='input-group'>
						<label>Contact Number</label>
						<input type='text' name='phone' placeholder="Your Phone Number Here"/>
						<span class="phone-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label>Email</label>
						<input type='email' name='email' placeholder="Your Email Here"/>
						<span class="email-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label>User name</label> 
						<input type='text' name='username' placeholder="Your username Here"/>
						<span class="user-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label>Password</label> 
						<input type='password' name='password' placeholder="Your Password Here"/>
						<span class="password-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label> Confirm Password</label> 
						<input type='password' name='cpassword' placeholder="Your Password Here"/>
						<span class="cpassword-msg" style="color: red;"></span>
					</div>
					<div class="button">
						<input type="submit" name="signup" value="Sign up"/>
					</div>
				</form>
					<div class="button1">
						<a href="userlogin.php" class="border-button">login </a>
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