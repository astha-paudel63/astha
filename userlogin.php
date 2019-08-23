<?php
	$menu=array('home'=>'Home','menu'=>'menu','register'=>'order online','blog'=>'blog','contact'=>'contact');
	session_start();
	$connect = mysqli_connect('localhost','root','','astha');
	if(isset($_POST['login'])){
		$uname = $_POST['name'];
		$password = $_POST['password'];
		$select = "select c_id,username,password from consumer where username='$uname' and password = '$password'";
		$data=mysqli_query($connect,$select) or die('Selection Error');
		$arr = mysqli_fetch_assoc($data);
		if($arr['username']==''||$arr['password']=='')
		{
			die('Invalid Username or Password');
		}
		else{
			$_SESSION['cid']=$arr['c_id'];
			header("location:ordering.php");
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>web desgin</title>
	<link rel="stylesheet" href="user/css/header.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/footer.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/button.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/userlogin.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/register.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/fontAwesome/css/font-awesome.css" type="text/css"/>
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
		<div class="login-form">
			<div class="login-form-wrapper">
				<h3>Enter Your Username and Password</h3>
				<form action='' method='post' enctype=''>
					<div class="input-group">
						<label>Uname</label>
						<input type='text' name='name' placeholder="Your Name Here"/>
						<span class="name-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label>Password</label> 
						<input type='password' name='password' placeholder="Your Password Here"/>
						<span class="password-msg" style="color: red;"></span>
					</div>
					<div class="button">
						<input type="submit" name="login" value="Login"/>
					</div>
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