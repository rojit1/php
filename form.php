<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<?php  
include 'connection.php';
if (isset($_POST['submit'])) {
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$query="insert into table_2 (subject,message) values('$subject','$message');";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "data stored in database";
	}
	else{
		echo "data not stored";
	}
}

?>

<form method="POST" action="form.php">
	<input type="text" name="subject" placeholder="enter subject"><br><br>
	<textarea name="message" cols="30" rows="20"></textarea><br><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>