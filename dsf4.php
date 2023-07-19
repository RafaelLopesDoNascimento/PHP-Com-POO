<?php 

class Passenger {
  //propriedades
  private $nome = "Rafael";
  private $age = 20;
  private $seatNumber = 18;



  //metodos
  public function getNome() {
    return $this->nome;
  }
  
  public function getAge() {
    return $this->age;
  }
  
  public function getSeatNumber() {
    return $this->seatNumber;
  }
  
  public function setSeatNumber($seatNewNumber) {
    $this->seatNumber = $seatNewNumber;
  }

}

$rafa = new Passenger;

echo $rafa->getNome() . "<br>";
 echo $rafa->getAge() . "<br>";
 echo $rafa->getSeatNumber() . "<br>";
 $rafa->setSeatNumber("11");
echo $rafa->getSeatNumber() . "<br>"
 
?>