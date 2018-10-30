<?php

class Cadastro {
  private $nome;
  private $sobrenome;
  private $username;
  private $email;
  private $password;
  private $confirmation;
  private $type;
  private $pais;
  private $estado;
  private $postal;

  public function __construct ($name, $sobrenome, $username, $email, $password, $confirmation, $type, $pais, $estado, $postal){
    $this->nome = $name;
    $this->sobenome = $sobrenome;
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
    $this->confirmation = $confirmation;
    $this->type = $type;
    $this->pais = $pais;
    $this->estado = $estado;
    $this->postal = $postal;
  }

  public function salvar(){
    $dsn = 'mysql:host=localhost;dbname=test;charset=utf8;port3306';
    $db_user = 'root';
    $db_pass = '';
    echo "<pre>";
    try{
      $db = new PDO($dsn, $db_user, $db_pass);
  } catch( PDOException $Exception ) {
  echo $Exception->getMessage();
}
}
