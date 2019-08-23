<?php
	$menu=array('home'=>'Home','menu'=>'menu','ordering'=>'order online','blog'=>'blog','contact'=>'contact');
	$connect=mysqli_connect('localhost','root','','astha') or die('connection error');
?>
<!DOCTYPE html>
<html>
<head>
	<title>web desgin</title>
	<link rel="stylesheet" href="user/css/header.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/footer.css" type="text/css"/>
	<link rel="stylesheet" href="user/css/bill.css" type="text/css"/>
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
		<div class='bill-wapper'>
			<div class='bill'>
				<table border='2'> 
					<tr>
						<th>S.N</th>
						<th>Category</th>
						<th>Menu Item</th>
						<th> price</th>
						<th>Quantity</th>
						<th>Amount</th>
					</tr>
		<?php 
			$a=$_POST['quantity'];
			$b =($_POST['menu']);
			$sum = 0;
			$cid=1;
			for($i=0;$i<count($b);$i++)
			{
				$select = "select * from menu where menuID = '$b[$i]'";
				$data = mysqli_query($connect,$select);
				$row = mysqli_fetch_assoc($data);?>
				<tr>
				<td><?php echo $i+1; ?></td>
				<td><?php echo $row['category']; ?></td>
				<td><?php echo $row['menuitem'];?> </td>
				<td><?php echo $row['price'];?></td>
				<td><?php echo $a[$i]; ?></td>
				<td><?php $tot=$row['price']*$a[$i];
				echo $tot;
				$sum = $sum+$tot;?></td>
				</tr>
				<?php $connect=mysqli_connect('localhost','root','','astha');
					$category = $row['category'];
					$menuitem = $row['menuitem'];
					$price = $row['price'];
					$quantity = $a[$i];
					$amount=$tot;
					$insert = "insert into orderdata(cid,category,menuitem,price,quantity,amount)
					values('$cid','$category','$menuitem','$price','$quantity','$amount')";
					mysqli_query($connect,$insert) or die('Insertion Error');
				?>
				
		<?php	$cid++; }
		?>
		</table>
		<div class='total'>
			<?php echo "Total ".$sum; ?>
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
	