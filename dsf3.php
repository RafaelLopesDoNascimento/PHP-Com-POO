<?php



class Contact {
  //propriedades
  private $nome;
  private $email;
  private $phone;

  //metodos

  public function getNome() {
    return $this-> nome;
  }

  public function getEmail() {
    return $this->email;
  }
  public function getPhone() {
    return $this-> phone;
  }

  //metodos set
  public function setEmail($email) {
    $this->email = $email;
  }

  public function setPhone($phone) {
    $this-> phone = $phone;
  }
  public function setNome($nome) {
$this->nome = $nome;
  }
}

$rafa = new Contact;

$rafa->setNome("Rafael");
$rafa->setEmail("rafael@gmail.com");
$rafa->setPhone("47 99214-1686");

echo "<br>" . $rafa->getNome();
echo "<br>" . $rafa->getEmail();
echo "<br>" . $rafa->getPhone();
?>