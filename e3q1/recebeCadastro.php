<?php

//RECEBER OS DADOS DO FORMULÁRIO
$dados = $_POST;

//TRANSFOMAR O ARRAY EM STRING
$dados = implode(" ; ",$dados);

//CRIAR UM ARQUIVO TXT
$arquivo = fopen("produtos.txt", "a+");

//ESCREVENDO OS DADOS DO PRODUTO NO ARQUIVO
fwrite($arquivo, $dados."\n");

//FECHAR O ARQUIVO
fclose($arquivo);

//REDIRECIONAR PARA A TABELA COM A LISTAGEM
header("location: listaProdutos.php");

?>