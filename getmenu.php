<?php 
$connect=mysqli_connect('localhost','root','','astha') or die('connection error');
$category=$_GET['category'];
echo "<div class='cate'><h2 style='text-align:center;'>".$category."</h2></div>";
$select="select * from menu where category='$category'";
$data=mysqli_query($connect,$select) or die('Selection Error');
echo "<div class='item'><table><tr>
		<th>Menu</th>
		<th>Price</th>
		</tr>
		";
while($arr=mysqli_fetch_assoc($data))
{
	$a=$arr['menuitem'];
	echo "<tr>";
	echo "<td>".$arr['menuitem']."</td>";
	echo "<td>.................................".$arr['price']."</td>";
	echo "</tr>";
}
echo "</table></div>";

?>