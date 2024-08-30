<?php

require_once "Publicacao.php";
require_once "Pessoa.php";

class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setLeitor($leitor);
    }

    function getTitulo() {
        return $this->titulo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function setPagAtual($pagina) {
        $this->pagAtual = $pagina;
    }

    function getAberto() {
        return $this->aberto;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function detalhes() {
        echo "<hr>Livro {$this->getTitulo()} escrito por {$this->getAutor()}";
		echo "<br> Páginas: {$this->getTotPaginas()} atual {$this->getPagAtual()}";
		echo "<br> Sendo lido por {$this->leitor->getNome()}";
    }

    public function abrir() {
        $this->setAberto(true);
    }

    public function avancarPag() {
        if ($this->getAberto()) {
            if ($this->getPagAtual() < $this->getTotPaginas()) {
                $this->setPagAtual($this->getPagAtual() + 1);
            } else {
                echo "<p>Fim do livro</p>";
            }
        } else {
            echo "<p>Livro Fechado, não pode folhear</p>";
        }
    }

    public function fechar() {
        $this->setAberto(false);
    }

    public function folhear($pagina) {
        if ($this->getAberto()) {
            if ($this->getTotPaginas() >= $pagina) {
                $this->setPagAtual($pagina);
            } else {
                echo "<p>Página não encontrada</p>";
            }
        } else {
            echo "<p>Livro Fechado, não pode folhear</p>";
        }
    }

    public function voltarPag() {
        if ($this->getAberto()) {
            if ($this->getPagAtual() > 0) {
                $this->setPagAtual($this->getPagAtual() - 1);
            } else {
                echo "<p>Inicio do Livro</p>";
            }
        } else {
            echo "<p>Livro Fechado, não pode folhear</p>";
        }
    }
}
