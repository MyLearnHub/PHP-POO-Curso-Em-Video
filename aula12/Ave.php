<?php

require_once "Animal.php";

class Ave extends Animal {
    private $corPena;

    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

    function locomover() {
        echo "<p>Voando</p>";
    }

    function alimentar() {
        echo "<p>Comendo Frutas</p>";
    }

    function emitirSom() {
        echo "<p>Som de Ave</p>";
    }

    public function fazerNinho() {
        echo "<p>Construindo um Ninho</p>";
    }
}