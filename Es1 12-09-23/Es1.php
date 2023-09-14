<?php

// traccia 1

$intero = 6;
$float = 5.6;
$stringa = 'Sono una stringa';
$boleano = true;

var_dump($intero, $float, $stringa, $boleano);

// ----------------

// traccia 2

$text1 = "Marco"; 
$text2 = "hai"; 
$text3 = "sete"; 
$text4 = "?"; 
$text5 = "Perchè";
$text6 = $text2;
$text7 = 'bevuto';
$text8 = "tutto";

echo $text1 . ' ' . $text2 . ' ' . $text3 . $text4 . ' ' . $text5 . ' ' . $text6 . ' ' . $text7 . ' ' . $text8;

// -------------

// traccia 3

                                                 //   6                      3          1
$words1 = [ 'una', 67,'vita', 'colle', 'mi', 'rosso', [ 'oscura', 'era', 89, [ 'mezzo', [ 
    //               2                2
    'cammin', 'Nel', [ 'selva', 'la', [ 'via', 'una', true, ] ], ] ], 'ritrovai', 'per' ], 'diritta' ]; 

$words2 = [ 'elemento1' => 25.89, 'elemento2' => 'nostra', 'elemento3' => [ 'Virgilio', 'smarrita', 'ché' ] ];

$words3 = ['di'];


$results = $words1[6][3][1][1] . ' ' . $words1[6][3][0] . ' ' . $words3[0] . ' ' . 
            // nel                       mezzo                    di

$words1[6][3][1][0] . ' ' . $words3[0] . ' ' . $words2['elemento2'] . ' ' . $words1[2]
// cammin                      di                  nostra                     vita

. ' ' . $words1[4] . ' ' . $words1[6][4] . ' ' . $words1[6][5] . ' ' . $words1[6][3][1][2][2][1]
//          mi                  ritrovai              per                         una

. ' ' . $words1[6][3][1][2][0] . ' ' . $words1[6][0].',' . ' ' . $words2['elemento3'][2]
//           selva                        oscura                     chè

. ' ' . $words1[6][3][1][2][0] . ' ' . $words1[7] . ' ' . $words1[6][3][1][2][2][0] . ' ' . $words1[6][1]
//          la                            diritta                    via                        era

. ' ' . $words2['elemento3'][1];
//   smarrita

var_dump($results);

// -------------

// traccia 4

$x = 10; 
$y = 20; 
$z = "20"; 
$w = 10;

var_dump($x < $y);
var_dump( $x <= $w);
var_dump($y == $z);
var_dump($y === $z);
var_dump($y !== $z);
var_dump($y != $z);

// --------------

// traccia 5 

$corsoHackademy = ['docenti' => ['Emanuele', 'Jeremy', 'Andrea'], 'studenti' => ['Dario', 'Giovanni', 'Tolotra', 'Cristiano'], 'argomenti' => ['html', 'javascript', 'php', 'css',"bootstrap"]];

echo 'ciao sono ' . $corsoHackademy['studenti'][2] . ' e sto imparando a studiare ' . $corsoHackademy['argomenti'][2] . ' con il docente ' . $corsoHackademy['docenti'][0] . ', con l\'aiuto di ' . $corsoHackademy['studenti'][0] . ', ' . $corsoHackademy['studenti'][1] . ' e ' . $corsoHackademy['studenti'][3];

