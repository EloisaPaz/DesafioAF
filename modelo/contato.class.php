<?php
class Contato{

	private $nome;
	private $email;
	private $mensagem;

	public function __construct($nome,$email,$mensagem){
		$this->nome = $nome;
		$this->email = $email;
		$this->mensagem = $mensagem;								
	}

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo,$valor){
		$this->$atributo=$valor;
	}//fecha método
}//fecha classe
?>
