<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css"> 
        <title>Polimorfismo2 PHP Poo</title>
    </head>
    <body>
        <div id = "interface">
            <header id ="cabecalho">
            	<hgroup>
                    <h1>Site Animal 2</h1>
                        <h2>POO em PHP</h2>
		</hgroup>						
            </header>
            <pre>
            <?php
                //Programa principal
                require_once 'Animal.php';
                require_once 'Mamifero.php';
                require_once 'Cachorro.php';
                require_once 'Lobo.php';
                
                $m = new Mamifero(50, 10, 8, "Rosa");
                $l = new Lobo(10, 5, "Branco");
                $c = new Cachorro(1,10,"Caramelo");
                
                $m->emitirSom();
                $l->emitirSom();
                $c->emitirSom();
                echo "<br><h2>Reagir Frase</h2>";
                $c->reagirFrase("Odrikandala RAI!");
                $c->reagirFrase("Olá");
                echo "<br><h2>Reagir Hora</h2>";
                $c->reagirHora(10, 5);
                $c->reagirHora(13, 50);
                $c->reagirHora(21, 12);
                echo "<br><h2>Reagir Dono</h2>";
                $c->reagirDono(false);
                $c->reagirDono(true);
                echo "<br><h2>Reagir Idade</h2>";
                $c->reagirIdade();                
                echo"<br><br>";
                $m->status();
                $l->status();
                $c->status();
                echo "<br>";
                
                
                
                
                
                
                
            ?>
            </pre>
            <footer id= "rodape">
			<p>2020 - by Leandro Marson Ribeiro<br>
            </footer> 
        </div>    
    </body>
</html>
