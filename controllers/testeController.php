<?php 
class testeController extends controller {

	public function index() {
		echo "Esse é um teste";
	}

	public function ver($nome, $sobrenome) {
		echo "Nome: ".$nome." ".$sobrenome;
	}
}