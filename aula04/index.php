<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Caneta.php';

                /*
                $c1 = new Caneta();
                $c1->setModelo("BIC");
                $c1->setPonta(0.5);
                print "Eu tenho uma caneta ($c1->getModelo()) de ponta ($c1->getPonta())";
                */

                $c1 = new Caneta("BIC", "Azul", 0.5);
                $c2 = new Caneta("KKK", "Verde", 1.0);

                print_r($c1);
                print_r($c2);
            ?>
        </pre>
    </body>
</html>