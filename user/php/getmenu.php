<?php 
$connect=mysqli_connect('localhost','root','','astha') or die('connection error');
$category=$_GET['category'];
echo $category;
$select="select * from menu where category='$category'";
$data=mysqli_query($connect,$select) or die('Selection Error');
echo "<table>";
while($arr=mysqli_fetch_assoc($data))
{
	echo "<tr>";
	echo "<td>".$arr['menuitem']."</td>";
	echo "<td>".$arr['price']."</td>";
	echo "</tr>";
}
echo "</table>";

?>