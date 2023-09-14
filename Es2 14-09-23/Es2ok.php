<?php

// traccia 1


$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'francesco', 'surname' => 'adduce', 'gender' => 'male'],
    ['name' => 'Carla', 'surname' => 'Coppola', 'gender' => 'female']
];

foreach ($users as $persona){
    
    $saluto = 'Buongiono ';

    if($persona['gender'] == 'male'){
        $saluto .= 'Sig. ';
    } elseif ($persona['gender'] == 'female') {
        $saluto .= 'Sig.ra ';

}

$saluto .= $persona['name'] . ' ' . $persona['surname'];

echo $saluto . "\n";

}


// ----------------

// traccia 2

$arreyNumeri = [2, 5, 24, 44, 67, 74, 66, 3,];

$arreyNemPari = 0;
$arreyLungezza = 0;
foreach($arreyNumeri as $pari){

    
    
    if(($pari % 2) == 0) {
        $arreyNemPari += $pari; 
        $arreyLungezza++;
    }



}

echo $arreyNemPari / $arreyLungezza;

// -------------

// traccia 3



for($numeri=1; $numeri < 101; $numeri++){
    

    if($numeri % 3 == 0 && $numeri % 5 == 0) {

        echo 'HACKADEMY';
        
    }elseif($numeri % 3 == 0){
        
        echo 'PHP';
    }elseif($numeri % 5 == 0) {
        
        echo 'JAVASCRIPT';

    }else {
        
        echo $numeri . " ";
        
    }

}



// -------------

// traccia 4

$temperatura = 0;

if($temperatura > 25){
    echo 'Fa molto caldo';
}elseif(($temperatura >= 15)){
    echo 'Fa caldo';
}elseif ($temperatura < 15){
    echo 'Fa freddo';
}

// --------------

// traccia 5 

$temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9, ];

foreach ($temperature as $città => $value) {


    if ($value > 25) {
        echo "A" . " ". $città . " ". 'Fa molto caldo ' . "\n";
    } elseif ($value >= 15) {
        echo "A" . " ". $città . " ".'Fa caldo ' . "\n";
    } elseif ($value < 15) {
        echo "A" . " ". $città . " ".'Fa freddo ' . "\n";
    }
}



// --------------