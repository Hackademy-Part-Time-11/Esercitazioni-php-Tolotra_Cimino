<?php

//! TRACCIA 1

class Continent {
    public $nameContinent;

    public function __construct($continent) { 
    $this->nameContinent = $continent; 
    }
}

class Country extends Continent {
    public $nameCountry;

    public function __construct($continent, $country){
        parent::__construct($continent);
        $this->nameCountry = $country;
    }
}

class Region extends Country {
    public $nameRegion;
    
    public function __construct($continent, $country, $region){
        parent::__construct($continent, $country);
        $this->nameRegion = $region;
    }
}

class Province extends Region {
    public $nameProvince;

    public function __construct($continent, $country, $region, $province){
        parent::__construct($continent, $country, $region, $province);
        $this->nameProvince = $province;
    }
}

class City extends Province {
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city){
        parent::__construct($continent, $country, $region, $province, $city);
        $this->nameCity = $city;
    }
}

class Street extends City {
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street){
        parent::__construct($continent, $country, $region, $province, $city, $street);
        $this->nameStreet = $street;
    }
    public function getMyCurrentLocation() {
    echo "Mi trovo in {$this->nameContinent}, {$this->nameCountry}, {$this->nameRegion}, {$this->nameProvince}, {$this->nameCity}, {$this->nameStreet}\n";
    }
}



$myLocation = new Street('Europa', 'Italia', 'Emilia-Romagna', 'Modena', 'Modena', 'Strada fatti una tazzina di c***i tuoi');
$myLocation->getMyCurrentLocation();

//traccia 2

class Animali {

    public function __construct()
    {
        
    }
}

class Vertebrates extends Animali{

    
       protected function stampaVertebrates(){

        echo "sono un animale vertebrato\n";
    }
    public function __construct(){

        $this->stampaVertebrates();
    }
}

class WarmBlooded extends Animali {

    protected function stampaWarmBlooded(){

        echo "sono un animale dal sangue caldo\n";
    }

    public function __construct(){

        $this->stampaWarmBlooded();
    }
}

class ColdBlooded extends Animali {

    protected function stampaColdBlooded(){

        echo "sono un animale dal sangue freddo\n";
    }
    public function __construct(){

        $this->stampaColdBlooded();
    }
}

class Mammiferi extends Animali {

    protected function stampaMammiferi(){

        echo "sono un Mammiferi\n";
    }
    public function __construct(){

        $this->stampaMammiferi();
    }
}

class Uccelli extends Animali {

    use Uova;
    protected function stampaUccelli(){

        echo "sono un Uccello\n";
    }
    public function __construct(){
        $this->covaUova();
        $this->stampaUccelli();
    }
}

class Fish extends Animali {
    use Aquatico;
    use Uova;
    protected function stampaFish(){

        echo "sono un Pesce\n";
    }
    public function __construct(){
        
        $this->stampaFish();
        $this->respirareAcqua();
        $this->covaUova();
    }
}

class Rettili extends Animali {
    use Uova;
    protected function stampaRettili(){

        echo "sono un Rettile\n";
    }
    public function __construct(){
        $this->covaUova();
        $this->stampaRettili();
    }
}

class Amfibio extends Animali {

    use Uova;
    protected function stampaAmfibio(){

        echo "sono un Amfibio\n";
    }
    public function __construct(){
        $this->covaUova();
        $this->stampaAmfibio();
    }
}

trait Aquatico {
    protected function respirareAcqua() {
        echo "Sono un animale che respira sott'acqua\n";
    }

    
}

trait Uova {
    protected function covaUova() {
        echo "Sono un animale che fa le uova\n";
    }
}

$magikarp = new Fish();

$pettirosso = new Uccelli();

// ---------------------------------

// traccia 3 (non so se ho capito bene la consegna dell'esercizio BUBITO)


// class Car { 
//     private $num_telaio;
    
//     public function gettNumeroTelaio() {
//         return $this->num_telaio;
//     }

//     public function settNumeroTelaio($num_telaio) {
//         return $this->num_telaio = $num_telaio;
//     }
//   } 

//   class Fiat extends Car { 
//     protected $license; 
//     protected $color;
    
//     public function gettLicense(){
//         return $this->license;
//     }

//     public function settLicense($license){
//         return $this->license = $license;
//     }

//     public function gettColor(){
//         return $this->color;
//     }

//     public function settColor($color){
//         return $this->license = $color;
//     }
// }

//     class Marchio extends Car { 
//         protected $nomeMarchio; 
        
        
//         public function __construct()
//         {
//             $fiat = new fiat();
//         }

//         public function gettnomeMarchio(){
//             return $this->nomeMarchio;
//         }
    
//         public function settnomeMarchio($nomeMarchio){
//             return $this->nomeMarchio = $nomeMarchio;
//         }
    
//         public function stampaCarInfo(){
    
//             echo "La mia macchina è {$this->gettnomeMarchio()}, con targa {$this->gettLicense()} e numero di Telaio {$this->gettNumeroTelaio()}";
//         }
    
//   }

//   $fiat = new Fiat();
//   $nomeMarchio = new Marchio();
//   $nomeMarchio->settnomeMarchio('Opel'); 
//   $fiat->settLicense("ND 123 OJ");
//   $fiat->settNumeroTelaio("1234");
//   $nomeMarchio->stampaCarInfo();
  
  