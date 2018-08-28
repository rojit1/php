  <?php 
  $var1=null;
  $var2="";
   ?>
   <?php  echo empty($var1);  ?><br>
   <?php  echo empty($var2);  ?><br> <!-- empty xa ki xaina herxa {var1 = null : empty ho ki haina hereko} -->
   <?php  echo isset($var2);  ?> <br> <!-- set xa ki xaina herxa -->
   <hr>
   <!-- =============================================== -->
   <?php 
   $name="rojit";
   $num=5;
   var_dump($name)."<br>"; // var_dump le type ra number display garxa.this is string type
   var_dump($num)."<br>";	// this is integer type

    ?>
    <hr><br>
    	type casting
    	settype($var,"integer")
    	<?php 
    	settype($name,"integer");
    	var_dump($name);

    	 ?>

<hr>
      <?php  

       $name1=55;
       $name1=(string)$name1;
       echo ($name1);
       ?>
<br>  
       <?php  

        define("pi",3.225);
        echo pi;
        ?>
