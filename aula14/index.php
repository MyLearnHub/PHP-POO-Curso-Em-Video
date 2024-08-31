<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula 14 - POO</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Video.php';
                require_once 'Gafanhoto.php';

                $videos[0] = new Video("Aula 1 de POO");
                $videos[1] = new Video("Aula 12 de PHP");
                $videos[2] = new Video("Aula 15 de HTML5");

                $gafanhotos[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
                $gafanhotos[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

                print_r($videos);
                print_r($gafanhotos);
            ?>
        </pre>
    </body>
</html>