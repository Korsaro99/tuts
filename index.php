<?php 
define('SURNAME','LORT');//const
$name = 'Steeve';
$age = 24;

//concatinate with dot
##echo $name.' '.$age ; //concatinate with dot
##echo '<br>';
#echo 'My name is '.$name;
#echo '<br>';
#echo '<br>';

//variable interpolation we use ""
#echo "I am $age years old "; 
#echo '<br>';
#echo 'I am $age years old';
#echo '<br>';
#echo '<br>';
//Escape Characters
#echo 'The dude went \'whaaaaa\'';
#echo '<br>';
#echo 'The dude went "whaaaaa"';
#echo '<br>';
#echo "The dude went 'whaaaaa'";
#echo '<br>';
#echo '<br>';

//Printing singular char from a string with bracket notation []
#echo $name[1];//t
#echo '<br>';
#echo $name[-6];//S
#echo '<br>';
#echo '<br>';

//String functions
#echo strlen($name);
#echo '<br>';
#echo strtoupper($name);
#echo '<br>';
#echo strtolower($name);
#echo '<br>';
#echo str_replace('v','w',$name);
#echo '<br>';
#echo '<br>';

//Numbers
$i=0;
$j=2;
$radius = 25; //intiger
$pi = 3.14; //float double
$float = 7.8;
#echo $pi;
#echo '<br>';
#echo '<br>';

//Operators +,-,*,/,**(power of)
#echo $radius**2 * $pi ;
#echo '<br>';
#echo $radius^-4;// ^ somma a bit però non considrea il resto non ho ben capito;
#echo '<br>';
#echo '<br>';

//Order of operation ( B I D M A S ) (Brackes Indicies Division Multiplication Addistion Subtraction )
#echo 2 * (4 + 6) / 5;
#echo '<br>';

//incremeant & decrement operators
#echo $i++;
#echo '<br>';//0
#echo ++$j;//3
#echo '<br>';

//shorthand operators

#echo $i += 10;
#echo '<br>';
#echo $i -= 5;
#echo '<br>';
#echo $i *= 6;
#echo '<br>';
#echo $i /= 2;
#echo '<br>';
#echo '<br>';

//Number Function
#echo floor($float); //it floors the number to the nearest smallest int  
#echo '<br>';
#echo ceil($float);//it floors the number to the nearest biggest int
#echo '<br>';
#echo pi();
#echo '<br>';
#echo '<br>';

//Arrays 
//indexed
$people = ['stef','jo','jonny','poul'];
$animals = array('dog','cat','cow','fish');
$intigers = [20, 30, 54, 72, 89];

$intigers[1] = 35;
$intigers[] = 61;
array_push($people, 'gino');
$mergedArray = array_merge($people, $animals);

#echo $people;//error arrays are difficult to automaticaly convert to strings
#echo $people[2];
#echo '<br>';
#echo $animals[1];
#echo '<br>';
#print_r($animals);
#echo '<br>';
#echo count($intigers);
#echo '<br>';
#print_r($mergedArray);
#echo '<br>';
#echo '<br>';

//associative (key & value pair)
$assocArray = ['one' => 'uno', 'two'=>'due', 'three' => 'tre','four'=>'quattro'];
$test = array('dog' => 'cane', 'cat' => 'gatto', 'cow' => 'mucca');

$assocArray['five'] = 'cinque';
$assocArray['two'] = 'otto';

$merge = array_merge($assocArray, $test);

#echo count($assocArray);
#echo '<br>';
#print_r($assocArray);
#echo '<br>';
#echo $test['dog'];
#echo '<br>';
#print_r($merge);
#echo '<br>';


//Multidimentional array
$blogs = [
    ['mario party', 'mario', 'lorem',30],
    ['mario kart cheats', 'toad', 'lorem', 25],
    ['zelda hidden chest', 'link', 'lorem', 50],
];
#echo '<br>';
#print_r($blogs[0][0]);
#echo '<br>';
#echo $blogs[0][1];
#echo '<br>';
#echo count($blogs[0]);
#echo '<br>';
#echo count($blogs);
#echo '<br>';

//Multidimentional associative array

$blogs2 = [
    ['title' => 'mario party', 'author' =>'mario','content' => 'lorem','likes' => 30],
    ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
    ['title' => 'zelda hidden chest', 'author' => 'link', 'content' => 'lorem', 'likes' => 50],
];
#echo '<br>';
#print_r($blogs2[1]['title']);
#echo '<br>';
#echo $blogs2[1]['author'];
#echo '<br>';
#echo count($blogs2[0]);
#echo '<br>';
#echo count($blogs2);
#echo '<br>';

$blogs3 = [
    'Blog1' => ['title' => 'mario party', 'author' =>'mario','content' => 'lorem','likes' => 30],
    'Blog2' => ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
    'Blog3' => ['title' => 'zelda hidden chest', 'author' => 'link', 'content' => 'lorem', 'likes' => 50],
];

#echo '<br>';
#print_r($blogs3['Blog3']['title']);
#echo '<br>';
#echo $blogs3['Blog3']['author'];
#echo '<br>';
#echo count($blogs3['Blog3']);
#echo '<br>';
#echo count($blogs3);
#echo '<br>';

$blogs[] = ['castle pary', 'peach', 'lorem', 100];

#print_r($blogs);
#echo '<br>';
#echo '<br>';

$blogs2[] = ['title' => 'castle pary', 'author' =>'peach','content' => 'lorem','likes' => 100];
#print_r($blogs2);
#echo '<br>';
#echo '<br>';

$blogs3['Blog4'] = ['title' => 'castle pary', 'author' =>'peach','content' => 'lorem','likes' => 100];
#print_r($blogs3);
#echo '<br>';
#echo '<br>';

$pooped = array_pop($blogs3); //togli l'ultimo array e ritornalo a $popped  
#print_r($pooped); 
#echo '<br>';
#echo '<br>';
#print_r($blogs3);
#echo '<br>';


//Loops

//FOR

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

/* for ($i=0; $i < 5; $i++) { 
    # code...
    echo $i . '<br>'; 
}

foreach ($people as $person) {
    # code...
    print_r($person); 
    echo '<br>';
}

foreach ($products as $product) {
    # code...
    echo $product['name'] . ' _ ' . $product['price']; 
    echo '<br>';
}

$i = 0;

while ($i < count($blogs2)) {
    # code...
    echo $blogs2[$i]['title'];
    echo '<br />';
    $i ++;
}
 */
//Boolea & comparisons
//numbers
/* echo true;
echo '<br>';
echo false;
echo '<br>';
echo 5 > 10;
echo '<br>';
echo 5 < 10;
echo '<br>';
echo 5 == 10;
echo '<br>';
echo 10 == 10;
echo '<br>';
echo 5 != 10;
echo '<br>'; */

//String

/* echo 'stefano' != 'francesco';
echo '<br>';
echo 'stefano' < 'francesco';
echo '<br>';
echo 'stefano' > 'francesco';
echo '<br>';
echo 'stefano' > 'Stefano';
echo '<br>';
echo 'stefano' == 'stefano';
echo '<br>';
echo 'stefano' == 'Stefano';
echo '<br>'; */


//losse vs strict comparison
/* echo true == '1';
echo '<br>';
echo false === ''; */

//Conditional Statements

/* $prezzo = 6;

if ($prezzo < 4){
    echo 'sup gggg';
}elseif ($prezzo < 10) {
    # code...
    echo 'wdsadfd';
}else{
    echo 'ghhghghgh';
}

foreach ($products as $product) {
    # code...
    if($product['price'] < 15 && $product['price'] > 2){
        echo $product['name'] . ' _ ' . $product['price']; 
        echo '<br>';
    }    
}

echo '<br>';
echo '===========================================';
echo '<br><br>';
foreach ($products as $product) {
    # code...
    if($product['price'] < 10 || $product['price'] > 20){
        echo $product['name'] . ' _ ' . $product['price']; 
        echo '<br>';
    }    
} */
//Continue & Break


foreach ($products as $product) {
    # code...
    if($product['name'] === 'lightning bolt'){
        break;
    }

    if($product['price'] > 15){
        continue; //passa al prossimo ciclo senza eseguire il codice rimanente
    } 
    //echo $product['name'].'<br>';    
}

//function

sayHello();
sayHi();
sayHi('Gonmg');
formatProduct(['name'=>'hammer', 'price'=> 50]);

function sayHello(){
    echo 'Good morning steeve'."<br>";
}

function sayHi($name = "DEfault Name"){ //valore di default in caso non viene passato un argomento 
    echo "Good morning $name"."<br>";
}

function formatProduct($product){
    echo "{$product['name']} costs £{$product['price']}"."<br>";
}
//SURNAME = 'SSSS'; //errore
//#echo '<b>Hello world</b>';
//#echo '<br>'
//#echo '<b>Anita MAx Win</b>';
?>

<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorial</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product) { ?>   
            <?php if($product['price'] > 15){?>     
                <li><h3> <?php echo $product['name'];  ?> </h3> 
                    <p>£ <?php echo $product['price'];  ?> </p>
                </li>    
            <?php } ?>     
        <?php } ?> 
    </ul>
</body>
</html>  -->