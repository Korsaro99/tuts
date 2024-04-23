<?php 
define('SURNAME','LORT');//const
$name = 'Steeve';
$age = 24;

//concatinate with dot
echo $name.' '.$age ; //concatinate with dot
echo '<br>';
echo 'My name is '.$name;
echo '<br>';

//variable interpolation we use ""
echo "I am $age years old "; 
echo '<br>';
echo 'I am $age years old';
echo '<br>';
//Escape Characters
echo 'The dude went \'whaaaaa\'';
echo '<br>';
echo 'The dude went "whaaaaa"';
echo '<br>';
echo "The dude went 'whaaaaa'";
echo '<br>';

//Printing singular char from a string with bracket notation []
echo $name[1];//t
echo '<br>';
echo $name[-6];//S
echo '<br>';

//String functions
echo strlen($name);
echo '<br>';
echo strtoupper($name);
echo '<br>';
echo strtolower($name);
echo '<br>';
echo str_replace('v','w',$name);

//Numbers


//SURNAME = 'SSSS'; //errore
//echo '<b>Hello world</b>';
//echo '<br>'
//echo '<b>Anita MAx Win</b>';
?>