<?php 

//Loops

//FOR

$people = ['stef','jo','jonny','poul'];

$blogs2 = [
    ['title' => 'mario party', 'author' =>'mario','content' => 'lorem','likes' => 30],
    ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
    ['title' => 'zelda hidden chest', 'author' => 'link', 'content' => 'lorem', 'likes' => 50],
];

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

for ($i=0; $i < 5; $i++) { 
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




?>


<!-- <!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorial</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product) { ?>   
        <li><h3> <?php echo $product['name'];  ?> </h3> 
            <p>£ <?php echo $product['price'];  ?> </p>
        </li>    
            
        <?php } ?> 
    </ul>
</body>
</html> -->