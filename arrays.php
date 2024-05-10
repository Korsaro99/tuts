<?php
//Arrays 
//indexed
$people = ['stef','jo','jonny','poul'];
$animals = array('dog','cat','cow','fish');
$intigers = [20, 30, 54, 72, 89];

$intigers[1] = 35;
$intigers[] = 61;
array_push($people, 'gino');
$mergedArray = array_merge($people, $animals);

//echo $people;//error arrays are difficult to automaticaly convert to strings
echo $people[2];
echo '<br>';
echo $animals[1];
echo '<br>';
print_r($animals);
echo '<br>';
echo count($intigers);
echo '<br>';
print_r($mergedArray);
echo '<br>';
echo '<br>';

//associative (key & value pair)
$assocArray = ['one' => 'uno', 'two'=>'due', 'three' => 'tre','four'=>'quattro'];
$test = array('dog' => 'cane', 'cat' => 'gatto', 'cow' => 'mucca');

$assocArray['five'] = 'cinque';
$assocArray['two'] = 'otto';

$merge = array_merge($assocArray, $test);

echo count($assocArray);
echo '<br>';
print_r($assocArray);
echo '<br>';
echo $test['dog'];
echo '<br>';
print_r($merge);
echo '<br>';

?>