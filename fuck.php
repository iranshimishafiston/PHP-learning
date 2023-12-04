<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="number" name="num1">
    <input type="submit" name="sub" value="click">
</form>
</body>
</html>-->
<?php
// if(isset($_POST['sub'])){
//     $fac=$_POST['num1'];
//     $num=1;
//     $num2=2;
//     for($i=0;$i<$num;$i++){
//     $next=$num+$num2;
//     $num2=$num+$next;
//     }
//     echo $num2;
// }


    //  $num=0;
    //  $num=1;
    //  $sum=0;
     
    //  echo $sum1. '<br>' . $num2;
    //  while($sum<10){
    //      $sum=$num1+$num2;
    //      echo $sum. '<br>';
    //      $num1=$num2;
    //      $num2=$sum;
    //      $sum=$num1+$num2;
    //  }


 
// Initialize the first two terms
$a = 0;
$b = 1;

// Set the number of terms to display
$n = 10;

// Print the first two terms
echo $a . " " . $b . " ";

// Use a counter variable
$count = 2;

// Loop until the counter reaches the number of terms
while ($count < $n) {
  // Calculate the next term by adding the previous two terms
  $c = $a + $b;

  // Print the next term
  echo $c . " ";

  // Update the first and second terms
  $a = $b;
  $b = $c;

  // Increment the counter
  $count++;
}




?> 