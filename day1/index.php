<?php 

echo " 1) write Hello word";
echo "<br>";
echo "<br>";



echo "Hello world";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo " 2) Write a PHP program to swap two variables ";
echo "<br>";
echo "<br>";

$a = 15;
echo "<br>";
$b=27;
echo "<br>";
echo " The number before swapping is : ";
 echo "<br>";
echo "Number a =" . $a . "<br>". " and b=". $b;
 $temp = $a;
  $a= $b;
  $b= $temp;
echo "<br>";
echo "The number after swapping is :";
echo "Number a=" .$a. " and b=" . $b . "\n";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo " 3) Write a PHP program to print 1 to 100 ";
echo "<br>";
echo "<br>";

 $i=1;
  for($i;$i<=100; $i++){
    echo $i;
    echo "<br>";
  }

  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo " 4) Write a PHP program to print 1 to 100 between odd number ";
echo "<br>";
echo "<br>";

 $i =1;
  for($i; $i<=100; $i++){
    if($i%2 !=0){
        echo $i;
        echo "<br>";
    }
    
  }
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo " 5) Write a PHP program to print 1 to 100 between even number ";
echo "<br>";
echo "<br>";

 $i=1;
  for($i ; $i<=100;$i++){
    if($i %2 ==0){
        echo $i;
        echo "<br>";
    }
  }

 
?>


