<?php

//! Traccia 1

class Company {
    
    public $nomeAzienda;
    public $luogo;

    public $tot_employees = 0;

    public static $avg_wage = 1500;

    public static $speseTotCompany = 0;

    public function __construct($nomeAzienda,$luogo,$tot_employees){

        $this->nomeAzienda = $nomeAzienda;
        $this->luogo = $luogo;
        $this->tot_employees = $tot_employees;
        
        
    }


    public function stampaAssunti(){

        if($this-> tot_employees > 0 ){
            echo "L’ufficio " . $this->nomeAzienda . " con sede in " . $this->luogo . " ha ben " . $this->tot_employees . " dipendenti \n";
        }else {
            echo "L’ufficio " . $this->nomeAzienda . " con sede in " . $this->luogo . " non ha dipendenti \n";
        }
       
    }

    
    public function speseAnnuale(){
        return $this-> tot_employees * self::$avg_wage * 12;
    }

    public function speseTotAnnuale(){
        
        $speseTotCompany = self::$speseTotCompany + $this->speseAnnuale();

        echo "La spesa annuale per" . $this->nomeAzienda . "è di " . $speseTotCompany . " euro\n";
    }
    
    public static function stampaSpeseTotAnnuale($companies) {
        $totalExpenses = 0;
        foreach ($companies as $company) {
            $totalExpenses += $company->tot_employees * self::$avg_wage * 12;
        }
        echo "La spesa totale annuale di tutte le aziende è di $totalExpenses euro\n";
    }

}

$Company1 = new Company("Aulab", "Italia", 50);
$Company2 = new Company("Dario Company", "Alaska", 100);
$Company3 = new Company("Sascha Company", "Emirati Arabi Uniti", 1050);
$Company4 = new Company("ingeniere Company", "Francia", 0);
$Company5 = new Company("Cristiano Company", "Georgia", 20);

$Company1 ->stampaAssunti(); 
$Company2 ->stampaAssunti(); 
$Company3 ->stampaAssunti(); 
$Company4 ->stampaAssunti();
$Company5 ->stampaAssunti(); 

$Company1 ->speseTotAnnuale(); 
$Company2 ->speseTotAnnuale(); 
$Company3 ->speseTotAnnuale(); 
$Company4 ->speseTotAnnuale();
$Company5 ->speseTotAnnuale(); 

$Companies = [$Company1, $Company2, $Company3, $Company4, $Company5];
Company::stampaSpeseTotAnnuale($Companies);

//! Traccia 2

class Contatore {
    public static $valore = 0;

    public static function azzera() {
        self::$valore = 0;
    }
}


echo "Valore iniziale del contatore: " . Contatore::$valore . "\n";

Contatore::$valore = 42;

echo "Nuovo valore del contatore: " . Contatore::$valore . "\n";

Contatore::azzera();

echo "Valore del contatore dopo l'azzeramento: " . Contatore::$valore . "\n";

//! Traccia 3

class Matematica {
    public static $risultato;

    public static function moltiplica($numeri) {
        self::$risultato = array_product($numeri);
    }

    public static function stampaRisultato() {
        echo "Il risultato è: " . self::$risultato . "\n";
    }
}


Matematica::moltiplica([2, 3, 4]);
Matematica::stampaRisultato();