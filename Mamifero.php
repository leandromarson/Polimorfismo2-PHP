<?php
require_once 'Animal.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mamifero
 *
 * @author Killer
 */
class Mamifero extends Animal{
    
    protected $corPelo;
    
    function __construct($peso, $idade, $membros, $corPelo) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
        $this->corPelo = $corPelo;
    }
    
    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }


    public function emitirSom() {
       echo "<p>Som de mamifero!</p>"; 
    }

    
    public function status(){
        echo "<p>MAMIFERO</p>";
        echo "<table><tr><td><p>Peso: </p></td><td>".$this->getPeso()." kg</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()." anos</td></tr>";
        echo "<tr><td><p>Membros: </p></td><td>".$this->getMembros()."</td></tr>";
        echo "<tr><td><p>Cor do Pelo: </p></td><td>".$this->getCorPelo()."</td></tr></table><br>";
    }
}
