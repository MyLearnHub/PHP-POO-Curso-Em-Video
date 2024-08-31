<?php

require_once "Animal.php";

class Peixe extends Animal {
    private $corEscama;

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    function locomover() {
        echo "<p>Nadando</p>";
    }

    function alimentar() {
        echo "<p>Comendo Substâncias</p>";
    }

    function emitirSom() {
        echo "<p>Peixe não faz som</p>";
    }

    function soltarBolha() {
        echo "<p>Soltou uma Bolha</p>";
    }
}