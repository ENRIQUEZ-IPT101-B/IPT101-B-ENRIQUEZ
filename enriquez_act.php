<!DOCTYPE html>
<html>
<body>
 <center>
    <?php    
     $multiple = 10; 
         echo "<h1>Multiplication table of 10<br><h2> ";
         for($i=1; $i<=10; $i++)   
         {
         $product = $i*$multiple;
         echo "$multiple x $i = $product" ;   
         echo '<br>';	 
         }  
         ?> 
 <center>
</body>
</html>