<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula 12 - POO</title>
    </head>
    <body>
        <?php
            require_once 'Mamifero.php';
            require_once 'Lobo.php';
            require_once 'Cachorro.php';

            // $animal = new Animal();

            // $mamifero = new Mamifero();
            // $mamifero->emitirSom();

            // $lobo = new Lobo();
            // $lobo->emitirSom();

            $cachorro = new Cachorro();
            $cachorro->emitirSom();

            $cachorro->reagirFrase("Olá");
            $cachorro->reagirFrase("Vai Apanhar!");

            $cachorro->reagirHora(11, 45);
            $cachorro->reagirHora(21, 00);

            $cachorro->reagirDono(true);
            $cachorro->reagirDono(false);

            $cachorro->reagirIdadePeso(2, 12.5);
            $cachorro->reagirIdadePeso(17, 4.5);
        ?>
    </body>
</html>