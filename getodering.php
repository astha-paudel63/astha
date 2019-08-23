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
	$b=$arr['price'];
	$c = $arr['menuID'];
	echo "<tr>";
	echo "<td>".$arr['menuitem']."</td>";
	echo "<td value='$b'>".$arr['price']."</td>";
	echo "<td><input type='checkbox' name='menu[]' value='$c'/></td>";
	echo "<td><select name='quantity[]'>";
	for($i=0;$i<=10;$i++)
		echo "<option value='$i'>".$i."</option>";
	echo "</tr>";
}
echo "</table>"; 
	echo "</div>";

?>