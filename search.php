<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
<input type="text" placeholder="search" name="search">
<input type="submit" value="search" name="submit">
</form>
<?php 
$con=mysqli_connect('localhost','root','','practise');
if(isset($_POST['submit']))
{
	$srch=$_POST['search'];
	if(!empty($srch))
	{
		$query="select name from table2 where name like '%$srch%'";
		$res=mysqli_query($con,$query);
		$check=mysqli_num_rows($res);
		if($check==0)
{
	echo "found nothing";
}
else{
	while($row=mysqli_fetch_assoc($res))
	{
		echo $row['name']."<br>";
	}
}
}
else
{
	echo "Please input something!!";
}
}

 ?>
</body>
</html>