<?php 
//Numbers
$i=0;
$j=2;
$radius = 25; //intiger
$pi = 3.14; //float double
$float = 7.8;
echo $pi;
echo '<br>';
echo '<br>';

//Operators +,-,*,/,**(power of)
echo $radius**2 * $pi ;
echo '<br>';
echo $radius^-4;// ^ somma a bit però non considrea il resto non ho ben capito;
echo '<br>';
echo '<br>';

//Order of operation ( B I D M A S ) (Brackes Indicies Division Multiplication Addistion Subtraction )
echo 2 * (4 + 6) / 5;
echo '<br>';

//incremeant & decrement operators
echo $i++;
echo '<br>';//0
echo ++$j;//3
echo '<br>';

//shorthand operators

echo $i += 10;
echo '<br>';
echo $i -= 5;
echo '<br>';
echo $i *= 6;
echo '<br>';
echo $i /= 2;
echo '<br>';
echo '<br>';

//Number Function
echo floor($float); //it floors the number to the nearest smallest int  
echo '<br>';
echo ceil($float);//it floors the number to the nearest biggest int
echo '<br>';
echo pi();

?>