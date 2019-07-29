<?php
	$category=array('VEG','NON-VEG','PIZZA','CHOWMIN','SOUP','MOMO','CHOPUEY','THUKPA','SEKUWA','COLD BEVERAGE');
?>

<!DOCTYPE html>
<html>
<head><title>form</title></head>
<body>
	<form action='menu.php' method='post'>
	category<?php
				for($i=0;$i<count($category);$i++)
					echo "<input type='radio' name='food' value='$category[$i]'/>".$category[$i];
			?></br>	
	menuitem<input type='text' name='menuitem' /><br/>
	price<input type='text' name='price'/><br/>
	<input type='submit' name='btn' value='submit'/>
	
			
</body>