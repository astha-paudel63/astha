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
	<script type="text/javascript">
			function validate(form)
			{
				var a = true;
				var name = form.txtname12.value;
				var username =/^[a-zA-Z ]+$/; 
				if(name =='' || name.length == 0 )
				{
					a=false;
					form.getElementsByClassName('username-error-message')[0].innerHTML = "Name should not be blank";
						
				}
				else{
						if(!name.match(username))
						{
							a = false;
							form.getElementsByClassName('username-error-message')[0].innerHTML = "Name should have only alphabet and space";
						}
					}
				var add = form.txtaddress12.value;
				if(add==""||add.length==0)
				{
					a = false;
					form.getElementsByClassName('useraddress-error')[0].innerHTML = "Address should not be blank";
				}
				var ph = form.txtphone12.value;
				var pho=/^[0-9]+$/;
				if(ph.length!=10)
				{
					a = false;
					form.getElementsByClassName('userphone-error')[0].innerHTML = "Please Enter 10 digit number";
				}
				else{
						if(!ph.match(pho))
						{
							a = false;
							form.getElementsByClassName('userphone-error')[0].innerHTML = "Invalid format Please re-enter number";
						}
					}
				var ma = form.txtemail12.value;
				var ema =/^[a-zA-Z](@|.|0-9|a-zA-Z|_)+$/;
				var mai = ma.indexOf('@')
				var emai = ma.lastIndexOf('.')
				
				if (!ma.match(ema))
				{
					a=false;
					form.getElementsByClassName('useremail-error')[0].innerHTML ='Invalid format please re-enter';
				}
				else if(ma.indexOf('@')<0)
				{
					a=false;
					form.getElementsByClassName('useremail-error')[0].innerHTML ='Invalid format please re-enter';
				}
				else
				{
					if(mai>emai)	
						{
							a=false;
							form.getElementsByClassName('useremail-error')[0].innerHTML ='Invalid format please re-enter';
						}
					
				}
					return a;
			}			
	</script>
	
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
					"background-image:url('../pic/contact.jpg')">
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
				<div class="contact-form">
					<div class="contact-form-wrapper">
						<h2>Contact-Form</h2>
						<form action="getcontact.php" method="post" onsubmit="return validate(this);">
							<div class="input-group">
								<input type="text"  name="txtname12" placeholder="Name*"/>
								<span class="username-error-message"></span>
							</div>
							<div class="input-group">	
								<input type="text" name="txtaddress12" placeholder="Address*"/>
								<span class="useraddress-error"></span>
							</div>
							<div class="input-group">			
								<input type="text" name="txtphone12" placeholder="Phone*"/>
								<span class="userphone-error"></span>
							</div>
							<div class="input-group">
								<input type="text" name="txtemail12" placeholder="Email*"/>
								<span class="useremail-error"></span>
							</div>
							<div class="input-group">
								<textarea placeholder="Message*" name="textmessage"></textarea>
							</div>
							<div class="input-submit">
								<input type="submit" name='submit' value='submit'/>
							</div>
						</form>
					</div>
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
	