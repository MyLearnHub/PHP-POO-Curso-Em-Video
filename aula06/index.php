<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <h1>Projeto Controle Remoto</h1>
        <pre>
            <?php
                require_once 'ControleRemoto.php';

                $c = new ControleRemoto();

                $c->ligar();
                $c->maisVolume();
                $c->abrirMenu();

                // $c->play();

                // $c->maisVolume();


                // print_r($c);
            ?>
        </pre>
    </body>
</html>