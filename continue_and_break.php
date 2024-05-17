<?php 

//Continue & Break

$prezzo = 6;

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

foreach ($products as $product) {
    # code...
    if($product['name'] === 'lightning bolt'){
        break;
    }
}

foreach ($products as $product) {
    # code...
    if($product['name'] === 'lightning bolt'){
        break;
    }

    if($product['price'] > 15){
        continue; //passa al prossimo ciclo senza eseguire il codice rimanente
    } 
    echo $product['name'].'<br>';    
}


?>