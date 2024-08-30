<?php

class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    function getIdade()
    {
        return $this->idade;
    }

    function setIdade($idade)
    {
        $this->idade = $idade;
    }

    function getAltura()
    {
        return $this->altura;
    }

    function setAltura($altura)
    {
        $this->altura = $altura;
    }

    function getPeso()
    {
        return $this->peso;
    }

    function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria()
    {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } else if ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } else if ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } else if ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "inválido";
        }
    }

    function getVitorias()
    {
        return $this->vitorias;
    }

    function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    function getDerrotas()
    {
        return $this->derrotas;
    }

    function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }


    function getEmpates()
    {
        return $this->empates;
    }

    function setEmpates($empates)
    {
        $this->empates = $empates;
    }

    function apresentar()
    {
        echo "<p>--------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
        echo " veio diretamente de " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "Kg";
        echo "<br>Ele tem " . $this->getVitorias() . " vitórias, ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates</p>";
    }

    function status()
    {
        echo "<p>--------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . "vezes,";
        echo " perdeu " . $this->getDerrotas() . " vezes e";
        echo " empatou " . $this->getEmpates() . " vezes!</p>";
    }

    function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
}
