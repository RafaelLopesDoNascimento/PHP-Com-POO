<?php

use Humano as GlobalHumano;

class Humano {
  //<propriedades>


  public $idade = "";
  public $nome = "";
  public $altura = "";
  public $peso = "";


  //</propriedades>
  //<metodos>

  public function andar() {
    echo "A pessoa esta andando <br>";
  }
private function discutindo() {
  echo "A pessoa esta discutindo <br>";
}
protected function conversando() {
  echo "A pessoa esta conversando <br>";
}

//<metodo pegar metodo privado e protect>

public function getPrivate() {
  $this -> discutindo();
}

public function getProtect1 () {
  $this -> conversando();
}
//</metodo pegar metodo privado e protect>
  //</metodos>

}
class Professor extends GlobalHumano {
  public function getProtect2 () {
    $this -> conversando();
  }
}

//Humano

$Robson = new GlobalHumano;

$Robson ->andar();
$Robson ->getPrivate();
$Robson -> getProtect1();

//Professor

$Teacher = new Professor;

$Teacher->nome = "Robson";
$Teacher ->idade = 42;
$Teacher ->altura = 1.85;
$Teacher ->peso = 80;

$Teacher ->andar();
$Teacher ->getPrivate();
$Teacher ->getProtect2();

echo "O Professor " .  $Teacher ->nome . ", tem " . $Teacher->idade . " de idade, possui uma altura de " .  $Teacher ->altura .  " e pesa " . $Teacher ->peso . " kilos";
?>