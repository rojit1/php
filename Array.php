<?php 

$num=[1,2,3,4,5];
$str=[1,"Ram","bahadur"];

echo $num[2]."<br>";
echo $str[2]."<br>";
 ?>

 <!-- To give specified place use '=>' sign as shown below -->

<?php 

$a=["fname"=>"hari","lname"=>"bahadur","address"=>"jamal"];
echo $a["fname"]." ".$a["lname"]."<br>";
echo $a["address"];

 ?>

 
<pre>
 <?php  print_r($a) ; ?>
</pre>hari
<!-- =============================  array inside array =============================== -->

<?php 

$ar=[1,"ram","hari",[2,3,"car",4,5]];

echo $ar[3][2]."<br>";


 ?>
 <pre>
 	<?php print_r($ar); ?>
 </pre>
 <!-- ============================================================ -->
 <hr>
<?php 
 $a=[1,2,3,4,5];

 echo count($a)."<br>"; // counts 
 echo min($a)."<br>";  // gives the minimun value of array
 echo max($a)."<br>"; // gives the maximum value of the array
 ?><hr>
 <!-- =============================================================== -->
 <?php 
$hello=array(1,2,3,4,5,6);
echo $hello[2];
print_r($hello); 
echo sort($hello);
  ?><br><hr>
  <!-- ========================================================================= -->






