<?php
// - Riprodurre una concessionaria di automobili in OOP seguendo questa gerarchia di classi, con caratteristiche a scelta (Marchio, Modello, Numero porte, Prezzo….e altri a vostra scelta)
//     - Automobile
//         - SUV
//         - Utilitaria
//         - Sportiva
// - Tenere il conto degli oggetti creati per ogni classe
// --Extra 1: Creare una classe "Moto" (o qualcosa del genere) ed implementare un tratto che funzioni sia per le automobili che per le moto.
// --Extra 2: Rendere la classe Automobile astratta ed implementare un metodo astratto che venga ereditato dalle sottoclassi



 abstract class Concessionaria{
    public $marchio;
    public $modello;
    public $numeroPorte;
    public $prezzo; 
    use Velocità;
    public static $counterCar=0;

    public function __construct($_marchio, $_modello, $_numeroPorte, $_prezzo){
        $this->marchio = $_marchio;
        $this->modello = $_modello;
        $this->numeroPorte= $_numeroPorte;
        $this->prezzo = $_prezzo;
        Self::$counterCar++;
    }
    public abstract function printCar();

    public static function countCars(){
        echo "il mio concessionario ha" . Self::$counterCar . "macchine";
    }
};




class Automobile extends Concessionaria {
    public function __construct($_marchio, $_modello, $_numeroPorte, $_prezzo){
        parent::__construct($_marchio, $_modello, $_numeroPorte, $_prezzo);
    }
    public function printCar(){
        echo "Questa $this->marchio $this->modello ha $this->numeroPorte porte con un prezzo di $this->prezzo euro ";
    }
    }
    
    
class Suv extends Concessionaria {
    public function __construct($_marchio, $_modello, $_numeroPorte, $_prezzo){
        parent::__construct($_marchio, $_modello, $_numeroPorte, $_prezzo);
    }
    public function printCar(){
        echo "Questa $this->marchio $this->modello ha $this->numeroPorte porte con un prezzo di $this->prezzo euro ";
    }
}

class Utilitaria extends Concessionaria {
    public function __construct($_marchio, $_modello, $_numeroPorte, $_prezzo){
        parent::__construct($_marchio, $_modello, $_numeroPorte, $_prezzo);
    }
    public function printCar(){
        echo "Questa $this->marchio $this->modello ha $this->numeroPorte porte con un prezzo di $this->prezzo euro ";
    }
    
}
class Sportiva extends Concessionaria {
    public function __construct($_marchio, $_modello, $_numeroPorte, $_prezzo){
        parent::__construct($_marchio, $_modello, $_numeroPorte, $_prezzo);
    }
    public function printCar(){
        echo "Questa $this->marchio $this->modello ha $this->numeroPorte porte con un prezzo di $this->prezzo euro ";
    }
}
trait Velocità{
    static function veloce(){
        echo "le macchine e le moto che ho in concessionario vanno molto veloci";
    }
}
class Moto {
    public $marchio;
    public $modello;
    public $prezzo; 
    public static $counterMoto=0;
    use Velocità; 

    public function __construct($_marchio, $_modello, $_prezzo){
        $this->marchio = $_marchio;
        $this->modello = $_modello;
        $this->prezzo = $_prezzo;
        Self::$counterMoto++;
    }
    public function printMoto(){
        echo "Questa $this->marchio $this->modello ha un prezzo di $this->prezzo euro ";
    }
    public static function countMoto(){
        echo "il mio concessionario ha" . Self::$counterMoto . "moto";
    }
}
$punto = new Automobile ("Fiat", "Punto", 4, 5000 );
$punto->printCar();
$austral = new Suv ("Renault", "Austral", 4, 32000);
$austral->printCar();
$corsa = new Utilitaria ("Opel", "Corsa", 4, 16000);
$corsa->printCar();
$serie2Coupé = new Sportiva("BMW", "serie2Coupé", 2, 40000);
$serie2Coupé->printCar();
Concessionaria::countCars();
$benelli = new Moto("Benelli", "Trk502 X", 6000);
$benelli->printMoto();
Moto::countMoto();
$punto->veloce();

