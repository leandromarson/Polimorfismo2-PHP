<?php
require_once 'Lobo.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cachorro
 *
 * @author Killer
 */
class Cachorro extends Lobo{
    
    public function __construct($peso, $idade, $corPelo) {
        parent::__construct($peso, $idade, $corPelo);       
    }
    
    public function reagirFrase($frase){
        if("Toma comida" == $frase || "Olá" == $frase){
            echo "<p>Abanar e Latir</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }
    
    public function reagirHora($hora,$min){
        if($hora<12){
            echo "<p>Abanar</p>";
        }else if($hora>=18){
            echo "<p>Ignorar</p>";
        }else{
            echo "<p>Abanar e Latir</p>";
        }
    }
    
    public function reagirDono($dono){
        if($dono==true){
            echo "<p>Abanar</p>";
        }else{
            echo "<p>Rosnar e Latir</p>";
        }
    }
    
    public function reagirIdade(){
        if($this->getIdade()<5){
            if($this->getPeso()<10){
                echo "<p>Abanar</p>";
            }else{
                echo "<p>Latir</p>";
            }
        }else{
            if($this->getPeso()<10){
                echo "<p>Rosnar</p>";
            }else{
                echo "<p>Ignorar</p>";
            }  
        }
    }
    
    public function emitirSom() {
        echo "<p>Au au au!</p>";
    }

        public function status(){
        echo "<p>CACHORRO</p>";
        echo "<table><tr><td><p>Peso: </p></td><td>".$this->getPeso()." kg</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()." anos</td></tr>";
        echo "<tr><td><p>Membros: </p></td><td>".$this->getMembros()."</td></tr>";
        echo "<tr><td><p>Cor do Pelo: </p></td><td>".$this->getCorPelo()."</td></tr></table><br>";
    }
    
    
}
