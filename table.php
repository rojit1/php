<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="5px" cellspacing="5px" cellpadding="5px">
		<tr>
			<th>ID</th>
			<th>Subject</th>
			<th>Message</th>
			<th>Update</th>
			<th>delete</th>
		</tr>
		
			<?php 
			$con=mysqli_connect("localhost","root","","practise");

			$query="SELECT * from table2 order by id asc ";
			$req=mysqli_query($con,$query);
			while ($new=mysqli_fetch_assoc($req)) {
				
			

			 ?>
				<tr>
					<td><?php echo $new['id'] ?></td>
					<td><?php echo $new['subject'] ?></td>
					<td><?php echo $new['message'] ?></td>
					<td><a href="update.php?id=<?php echo $new['id']; ?>">Update</a></td>
					<td><a href="delete.php?id=<?php echo $new['id']; ?>">Delete</a></td>
				</tr>
				<?php } ?>
	</table>

</body>
</html>