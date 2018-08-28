<?php 
$ages=[5,10,15,20,30];
foreach ($ages as $age) {
	echo $age." years";
	echo "<br>";
}

 ?><hr>
<?php 
	for ($count=0; $count <=10 ; $count++) { 
		
		if ($count==5) {
		continue;
	}
	echo $count.", ";
	}

	
 ?>