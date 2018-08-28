<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST" action="upload.php" enctype="multipart/form-data">

	<input type="File" name="image"><br><br>
	<input type="submit" name="submit" value="submit">

</form>

<?php 

$con=mysqli_connect('localhost','root','','practise');

if (isset($_POST['submit'])) {
	echo "<pre>";
	print_r($_FILES);
	print_r($_POST);
	echo "</pre>";

	$name=$_FILES['image']['name'];
	$tmp_name=$_FILES['image']['tmp_name'];

	if (!empty($name)) {
		$location="image/";
		if (move_uploaded_file($tmp_name,$location.$name)) {
			$query="insert into table_image(image) values('$name');";
			$res=mysqli_query($con,$query);
			if ($res) {
				echo "upload succesful";
			}else{
				echo "failed !";
			}
		}
	}
}

 ?>

</body>
</html>