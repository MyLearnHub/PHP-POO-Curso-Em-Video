<?php

interface Publicacao {
	public function abrir();

	public function avancarPag();

	public function fechar();

	public function folhear($pagina);

	public function voltarPag();
}