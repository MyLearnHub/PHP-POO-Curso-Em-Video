<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula 10 - POO</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Aluno.php';
                require_once 'Professor.php';
                require_once 'Funcionario.php';

                $pessoa1 = new Pessoa();
                $pessoa2 = new Aluno();
                $pessoa3 = new Professor();
                $pessoa4 = new Funcionario();

                $pessoa1->setNome("Pedro");
                $pessoa2->setNome("Maria");
                $pessoa3->setNome("Cláudio");
                $pessoa4->setNome("Fabiana");

                $pessoa1->setSexo("M");
                $pessoa4->setSexo("F");

                $pessoa2->setCurso("Informática");
                $pessoa3->setSalario(2500.75);
                $pessoa4->setSetor("Estoque");

                $pessoa3->receberAumento(550.20);
                $pessoa4->mudarTrabalho();
                $pessoa2->cancelarMatr();

                print_r($pessoa1);
                print_r($pessoa2);
                print_r($pessoa3);
                print_r($pessoa4);
            ?>
        </pre>
    </body>
</html>