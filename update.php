<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$con=mysqli_connect('localhost','root','','practise');


$id=$_GET['id'];

$query="SELECT * from table2 where id='$id' ";
$result=mysqli_query($con,$query);
$new=mysqli_fetch_assoc($result);

 ?>

 <form method="POST" action="update.php">
 	<input type="hidden" name="id" value="<?php echo $new['id']; ?>"><br><br>
 	<input type="text" name="subject" value="<?php echo $new['subject']; ?>"><br><br>
 	<textarea name="message" cols="30" rows="20">
 		<?php echo $new['message']; ?>
 	</textarea><br>
 	<input type="submit" name="submit" value="update">

 </form>

 <?php 

if (isset($_POST['submit'])) {
		$id=$_POST['id'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];

		$query="UPDATE table2 set subject='$subject',message='$message' where id='$id' ";
		$result=mysqli_query($con,$query);
		if ($result) {
			echo "update succesful";
		}
		else {
			echo "Update failed";
		}
	}

  ?>
<br>
<a href="table.php">click</a>

</body>
</html>