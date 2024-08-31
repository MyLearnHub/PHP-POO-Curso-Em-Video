<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula 12 - POO</title>
    </head>
    <body>
        <?php
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';

            // $animal = new Animal();

            $mamifero = new Mamifero();
            $ave = new Ave();
            $reptil = new Reptil();
            $canguru = new Canguru();
            $cachorro = new Cachorro();
            $tartaruga = new Tartaruga();

            // $mamifero->setPeso(33.5);

            // $mamifero->locomover();
            // $ave->locomover();
            // $reptil->locomover();

            // $mamifero->locomover();
            // $canguru->locomover();
            // $cachorro->locomover();
            // $tartaruga->locomover();

             $mamifero->emitirSom();
             $cachorro->emitirSom();
             $canguru->emitirSom();
        ?>
    </body>
</html>