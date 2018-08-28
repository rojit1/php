<?php 

$a="9";
$b="5";

$sum=$a+$b;
$mult=$a*$b;

echo $sum."<br>";
echo $a-$b."<br>";
echo $mult."<br>"."<hr>";

// =================================================
$fname="Hari";
$lname="bahadur";

echo "Your name is".$fname." ".$lname."<br>";

 ?>
<hr>
<!-- =============================================== -->
 <?php 
$x="Hi my name is rojit.";

echo strtoupper($x)."<br>";
echo strtolower($x)."<br>";
echo ucfirst($x)."<br>";
echo ucwords($x)."<br>";
echo str_replace("name", "apple", $x)."<br>";
echo str_repeat($x,5)."<br>";
echo strlen($x)."<br>";
echo strstr($x,"is")."<br>"; //  {echo strchr($x,"is")."<br>";}  thease both works same.
echo substr($x,1)."<br>";  
echo strpos($x,"is")."<br>"; // 'strpos' means string position.It locates in which number of position does a word stands.



  ?><hr>
  <!-- ========================================================== -->
  <?php 
$c=5;

echo (5*4)-$c."<br>";
echo pow(2,4)."<br>";
echo abs(5-400)."<br>";
echo sqrt(64)."<br>";
echo fmod(18,5)."<br>";
echo rand()."<br>";
echo rand(4,10)."<br>";


?><hr>

<?php echo $c +=2; ?><br>
<?php echo $c -=2; ?><br>
<?php echo $c *=2; ?><br>
<?php echo $c /=2; ?><br>  <hr>

<?php 
	$c++;echo $c;
 ?>
 <?php 
	$c--;echo $c;
 ?> 

<!-- ================================================================= -->
 <?php 

 	$s=3.8;

 	echo round($s)."<br>";
 	echo ceil($s)."<br>";
 	echo floor($s)."<br>";

  ?>
<hr>
  <!-- ============================================================================== -->

<?php 

$int=5;
$flo=6.888;

echo "is {$int} integer"." ". is_int($int)."<br>";
echo "is {$flo} integer". is_int($flo)."<br>";

echo "is {$int} decimal".is_float($int);
echo "is {$flo} decimal".is_float($flo);


 ?>

 