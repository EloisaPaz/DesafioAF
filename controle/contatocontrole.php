<?php
include_once '../modelo/contato.class.php';
include_once '../util/validacao.class.php';
include_once '../util/email.class.php';

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$mensagem = $_POST['txtmensagem'];

if(!Validacao::testarNome($nome) ||
   !Validacao::testarEmail($email) ||
   !Validacao::testarMensagem($mensagem)){

	header("location:guierro.php");

}else{
	$c = new Contato($nome,$email,$mensagem);

	//Montando a mensagem que será enviada por email
	$msg = "Nome: $c->nome #### Email: $c->email #### mensagem: $c->mensagem ";

	/*Instanciando objeto $e a partir da classe Email. Enviando a mensagem pelo construtor*/
	$e = new Email($msg);
	//Chamando o método que enviará o email
	$e->enviarEmail();

	header("location:guiresposta.php");
}//fecha else
?>
