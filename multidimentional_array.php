<?php 
//Multidimentional array
$blogs = [
    ['mario party', 'mario', 'lorem',30],
    ['mario kart cheats', 'toad', 'lorem', 25],
    ['zelda hidden chest', 'link', 'lorem', 50],
];
echo '<br>';
print_r($blogs[0][0]);
echo '<br>';
echo $blogs[0][1];
echo '<br>';
echo count($blogs[0]);
echo '<br>';
echo count($blogs);
echo '<br>';
//Multidimentional associative array

$blogs2 = [
    ['title' => 'mario party', 'author' =>'mario','content' => 'lorem','likes' => 30],
    ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
    ['title' => 'zelda hidden chest', 'author' => 'link', 'content' => 'lorem', 'likes' => 50],
];
echo '<br>';
print_r($blogs2[1]['title']);
echo '<br>';
echo $blogs2[1]['author'];
echo '<br>';
echo count($blogs2[0]);
echo '<br>';
echo count($blogs2);
echo '<br>';

$blogs3 = [
    'Blog1' => ['title' => 'mario party', 'author' =>'mario','content' => 'lorem','likes' => 30],
    'Blog2' => ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
    'Blog3' => ['title' => 'zelda hidden chest', 'author' => 'link', 'content' => 'lorem', 'likes' => 50],
];

echo '<br>';
print_r($blogs3['Blog3']['title']);
echo '<br>';
echo $blogs3['Blog3']['author'];
echo '<br>';
echo count($blogs3['Blog3']);
echo '<br>';
echo count($blogs3);
echo '<br>';

$blogs[] = ['castle pary', 'peach', 'lorem', 100];

print_r($blogs);
echo '<br>';
echo '<br>';

$blogs2[] = ['title' => 'castle pary', 'author' =>'peach','content' => 'lorem','likes' => 100];
print_r($blogs2);
echo '<br>';
echo '<br>';

$blogs3['Blog4'] = ['title' => 'castle pary', 'author' =>'peach','content' => 'lorem','likes' => 100];
print_r($blogs3);
echo '<br>';
echo '<br>';

$pooped = array_pop($blogs3); //togli l'ultimo array e ritornalo a $popped  
print_r($pooped); 
echo '<br>';
echo '<br>';
print_r($blogs3);
echo '<br>';
echo '<br>';
?>