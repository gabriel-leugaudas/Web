<?php 
  $email = $_POST['email'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $connect = mysql_connect('localhost','root','usbw');
  $db = mysql_select_db('projeto');
    if (isset($entrar)) {
             
      $verifica = mysql_query("SELECT * FROM cli_cliente WHERE CLI_EMAIL = '$email' AND CLI_SENHA = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$email);
          header("Location:index.html");
        }
    }
?>