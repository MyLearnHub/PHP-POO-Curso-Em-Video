<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula 09 - POO</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Livro.php';
                require_once 'Pessoa.php';

                $pessoa[0] = new Pessoa("Pedro", 22, "M");
                $pessoa[1] = new Pessoa("Maria", 31, "F");

                $livro[0] = new Livro("PHP Básico", "José da Silva", 300, $pessoa[0]);
                $livro[1] = new Livro("POO com PHP", "Maria de Souza", 500, $pessoa[0]);
                $livro[2] = new Livro("PHP Avançado", "Ana Paula", 800, $pessoa[1]);

                // print_r($livro[0]);

                $livro[0]->abrir();

                $livro[0]->folhear(80);
                $livro[0]->avancarPag();
                $livro[0]->voltarPag();
                $livro[0]->folhear(100);

                // $livro[0]->folhear(500);

                $livro[0]->detalhes();
                $livro[1]->detalhes();
                $livro[2]->detalhes();
            ?>
        </pre>
    </body>
</html>