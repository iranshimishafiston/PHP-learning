<!DOCTYPE html>  
<html>  
<body>  
<table align = "left" border = "1" cellpadding = "3" cellspacing = "2">  
<tr>  
<td> Quantity </td>  
<td> Additional </td>  
<td> Prize </td>  
<td> Total </td>  
</tr>  
<?php    
$x = 10;  
$price = 35;  
$quatity = 1;  
while($x <= 60 && $quantity <= 6) {  
    echo "<tr>";  
  echo "<td> $x </td>";  
  echo "<td> $quatity </td>";  
  echo "<td>" .$x*$price. "</td>";  
  echo "<td>" .$x*$price*$quatity. "</td>";  
    echo "</tr>";  
  $x += 10;  
  $quatity++;  
}   
?>    
</table>  
</body>  
</html>  










<!DOCTYPE html> 
<html> 

<body> 
	<center> 
		<h1 style="color: green;"> 
			GeeksforGeeks 
		</h1> 

		<h3> 
			Program to print multiplication<br> 
			table of any number in PHP 
		</h3> 

		<form method="POST"> 
			Enter a number: 
			<input type="text" name="number"> 
			
			<input type="Submit"
				value="Get Multiplication Table"> 
		</form> 
	</center> 
</body> 

</html> 

<?php 
if($_POST) { 
	$num = $_POST["number"]; 

	echo nl2br("<p style='text-align: center;'> 
		Multiplication Table of $num: </p> 
	"); 
		
	for ($i = 1; $i <= 10; $i++) { 
		echo ("<p style='text-align: center;'>$num"
			. " X " . "$i" . " = "
			. $num * $i . "</p> 
		"); 
	} 
} 
?>







<?php  
    //integer variable  
    $input1 = 501;  
    print_r('Integer Value: '.$input1);  
    echo "</br>";  
      
    //float variable  
    $input2 = 22.4;  
    print_r('Float Value: '.$input2);  
    echo "</br>";  
      
    //string variable  
    $input3 = 'Welcome to javatpoint!';  
    print_r('String Value: '.$input3);  
?>  