<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- here we have linked it with database with a database"rojit" having a table named "table_1". -->


<?php 
	
	$con=mysqli_connect("localhost","root","","rojit");

	if (isset($_POST['submit']))
	 {
		$subject=$_POST['subject'];
		$message=$_POST['message'];

		$query="insert into table_1(subject,message) values('$subject','$message');";
		$result=mysqli_query($con,$query);

		if ($result) {
			echo "data stored in database";
		}
		else{
			echo "database not stored";
		}
	}

 ?>
<form method="POST" action="link into database.php">
	<input type="text" name="subject" placeholder="enter your message"><br><br>
	<textarea name="message" cols="20" rows="20"></textarea><br><br>
	
	<input type="submit" name="submit">
</form>

</body>
</html>