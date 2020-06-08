<?php
$pdo = new PDO ("mysql:host=localhost;dbname=projeto", "root", "usbw",
array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
)
);
if (!$pdo){
    die('Erro ao criar a conexão');
}
$nome = $_POST['nome'];
$rua =$_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$cidade = $_POST['cidade'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha =$_POST['senha'];

$executa = $pdo->query("INSERT INTO cliente_cli(CLI_NOME_COMPLETO, CLI_ENDERECO, CLI_NUMERO, CLI_COMPLEMENTO, CLI_BAIRRO, CLI_CEP, CLI_UF,CLI_CIDADE, CLI_CPF, CLI_EMAIL, CLI_SENHA) VALUES ('$nome','$rua','$numero','$complemento','$bairro','$cep','$uf','$cidade','$cpf','$email','$senha')");
   if($executa){
    $_SESSION['mensagem'] = "Usuario cadastrado com sucesso!";
    header("location: login.html");
   }
   else{
      print_r($pdo->errorInfo());
   }

?>