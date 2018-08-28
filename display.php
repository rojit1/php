<!DOCTYPE html>
<html>
<head>
	<title>display</title>
</head>
<body>
<?php 

include 'connection.php';
$query="SELECT * from table_2 order by id asc;";
$req=mysqli_query($con,$query);
while ($new=mysqli_fetch_assoc($req)) {
?>
	<h1><?php echo $new['id'].$new['subject']; ?></h1>
	<p><?php echo $new['message']; ?></p>

	<?php
	 } 
	 ?>



 
</body>
</html>