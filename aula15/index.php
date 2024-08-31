<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula 15 - POO</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Video.php';
                require_once 'Gafanhoto.php';
                require_once 'Visualizacao.php';

                $videos[0] = new Video("Aula 1 de POO");
                $videos[1] = new Video("Aula 12 de PHP");
                $videos[2] = new Video("Aula 15 de HTML5");

                $gafanhotos[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
                $gafanhotos[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

                $visualizacoes[0] = new Visualizacao($gafanhotos[0], $videos[2]);
                $visualizacoes[1] = new Visualizacao($gafanhotos[0], $videos[1]);

                $visualizacoes[0]->avaliar();
                $visualizacoes[1]->avaliarPorcentagem(85);

                print_r($visualizacoes);
            ?>
        </pre>
    </body>
</html>