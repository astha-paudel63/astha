<?php 
$connect=mysqli_connect('localhost','root','','astha') or die('connection error');
$category=$_GET['category'];
echo $category;
$select="select * from menu where category='$category'";
$data=mysqli_query($connect,$select) or die('Selection Error');
echo "<div class='item'><table><tr>
		<th>Menu</th>
		<th>Price</th>
		<th>Select Item</th>
		<th>Quantity</th></tr>
		";
while($arr=mysqli_fetch_assoc($data))
{
	$a=$arr['menuitem'];
	echo "<tr>";
	echo "<td>".$arr['menuitem']."</td>";
	echo "<td>".$arr['price']."</td>";
	echo "<td><input type='checkbox' name='menu' value='$a'/></td>";
	echo "<td><input type='number' name='quantity'/></td>";
	echo "</tr>";
}
echo "</table></div>";

?>