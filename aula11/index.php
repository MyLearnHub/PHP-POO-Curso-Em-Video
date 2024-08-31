<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula 11 - POO</title>
    </head>
    <body>
        <pre>
            <?php
                //require_once 'Pessoa.php';

                require_once 'Visitante.php';
                require_once 'Aluno.php';
                require_once 'Bolsista.php';

                // $pessoa1 = new Pessoa();

                $visitante1 = new Visitante();
                $visitante1->setNome("Juvenal");
                $visitante1->setIdade(33);
                $visitante1->setSexo("M");
                print_r($visitante1);

                $aluno1 = new Aluno();
                $aluno1->setNome("Pedro");
                $aluno1->setIdade(16);
                $aluno1->setSexo("M");
                $aluno1->setMatricula(1111);
                $aluno1->setCurso("Informática");
                $aluno1->pagarMensalidade();
                print_r($aluno1);

                $bolsista1 = new Bolsista();
                $bolsista1->setNome("Jubileu");
                $bolsista1->setIdade(17);
                $bolsista1->setMatricula(1112);
                $bolsista1->setCurso("Administração");
                $bolsista1->setBolsa(12.5);
                $bolsista1->pagarMensalidade();
                print_r($bolsista1);
            ?>
        </pre>
    </body>
</html>