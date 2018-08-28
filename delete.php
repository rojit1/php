<?php 

$con=mysqli_connect('localhost','root','','practise');
$id=$_GET['id'];

$query="DELETE from table2 where id='$id'; ";
$res=mysqli_query($con,$query);
if ($res) {
	echo "deleted";
}else{
	echo "cannot delete";
}

 ?>
 <br>
 <a href="table.php">table</a>