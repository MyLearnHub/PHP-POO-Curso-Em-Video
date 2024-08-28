<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <div>
            <pre>
                <?php
                    ini_set( 'error_reporting', E_ALL );
                    ini_set( 'display_errors', true );
                    require_once 'Caneta.php';

                    $c1 = new Caneta();
                    $c1->modelo = "BIC Cristal";
                    $c1->cor = "Azul";
                    // $c1->ponta = 0.5;
                    // $c1->carga = 99;
                    // $c1->tampada = true;

                    $c1->rabiscar();
                    $c1->tampar();

                    print_r($c1);
                ?>
            </pre>
        </div>
    </body>
</html>