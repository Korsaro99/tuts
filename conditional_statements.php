<?php
//Conditional Statements

$prezzo = 6;

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

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
}

//SURNAME = 'SSSS'; //errore
//#echo '<b>Hello world</b>';
//#echo '<br>'
//#echo '<b>Anita MAx Win</b>';
?>


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
</html> 