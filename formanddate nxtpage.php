<?php 

$fname=$_POST['fname'];// here in brackets "['']" we enter the name of input elements
$lname=$_POST['lname'];
$contact=$_POST['contact'];
$address=$_POST['address'];

 ?>
 <?php 
echo "Your name is ". $fname." ".$lname."<br>";
echo "YOUR contact is ".$contact."<br>";
echo "YOUR address is ".$address."<br>";

  ?><br><hr>
  <!-- how to display date and time [" we use date function to display both date and time"]  -->
  <?php 
  	echo date("Y/M/d/l")."<br>"; // here y="years",m="month",d="date",l="day"
  	echo date("h/i/s/a")."<br>";// here h="hours",i="minute",a="second",a="am-or-pm"
   ?>
	<!-- here we can find out time through timezone identifer -->
	<hr>
	<h3>Here is timezone identifer</h3>
   <?php 
   	date_default_timezone_set("America/New_york");
   	echo date("Y/M/d/D")."<br>";
   	echo date("h/i/s/a");

    ?><hr>
    <?php 
    	$a=mktime(1,11,00,5,30,2017);
    	echo "created date is ".date("y/m/d/l/h/i/s/a",$a);
     ?><hr>
     <p>here we can change string into time</p>

     <?php 
     	$b=strtotime("10:30 april 17 2017");
     	echo date("y/m/d/l/h/i/s/a"s,$b);
      ?>