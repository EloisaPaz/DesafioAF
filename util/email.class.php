<?php
class Email{

	private $to;
	private $assunto;
	private $msg;

	public function __construct($msg){
		$this->to="contatoteste0@gmail.com";
		$this->assunto="contato via site";
		$this->msg=$msg;
	}

	/* Método que envia o email através da função mail() */
	public function enviarEmail(){
		mail($this->to,$this->assunto,$this->msg);
	}//fecha método enviarEmail

}//fecha class Email
?>
