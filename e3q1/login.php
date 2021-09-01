<?php

//ACESSO MASTER
$master['email'] = "adm.mauricelio@gmail.com";
$master['senha'] = "789456";
$master['cpf'] = "01505986370";
$master['tipoAcesso'] = "admin";

//RECEBENDO OS DADOS DO FORMULARIO
$email = $_POST['email'];
$senha = $_POST['senha'];

if($email != $master['email']){
    header("location: index.php?msg=usuario_incorreto");
}elseif($senha != $master['senha']){
    header("location: index.php?msg=senha_incorreta");
}else{
    session_start();
    //Chamando a variável de sessão
    $_SESSION['e3q1'] = $master;

    header("location: index.php");

}

?>