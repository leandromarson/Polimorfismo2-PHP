<?php
require_once 'Mamifero.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Canguru
 *
 * @author Killer
 */
class Lobo extends Mamifero{
    public function __construct($peso, $idade, $corPelo) {
        parent::__construct($peso, $idade, 4, $corPelo);       
    }
    
    public function emitirSom() {
        echo "<p>AUUUUUUUUUU!</p>";
    }
    
    public function status(){
        echo "<p>LOBO</p>";
        echo "<table><tr><td><p>Peso: </p></td><td>".$this->getPeso()." kg</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()." anos</td></tr>";
        echo "<tr><td><p>Membros: </p></td><td>".$this->getMembros()."</td></tr>";
        echo "<tr><td><p>Cor do Pelo: </p></td><td>".$this->getCorPelo()."</td></tr></table><br>";
    }
    
    
    
}
