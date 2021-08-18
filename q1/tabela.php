<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];

// montagem do html da tabela
$table  = '<table border="1" style="width:100%">';
$table .= '<thead>';
$table .= '<tr>';
$table .= '<th>NOME</th>';
$table .= '<th>CPF</th>';
$table .= '<th>RG</th>';
$table .= '<th>ENDEREÇO</th>';
$table .= '<th>BAIRRO</th>';
$table .= '<th>CIDADE</th>';
$table .= '<th>TELEFONE</th>';
$table .= '</tr>';
$table .= '</thead>';
$table .= '<tbody>';

// Inclusão dos dados na tabela

$table .= '<tr>';
    $table .= "<td>{$nome}</td>";
    $table .= "<td>{$cpf}</td>";
    $table .= "<td>{$rg}</td>";
    $table .= "<td>{$endereco}</td>";
    $table .= "<td>{$bairro}</td>";
    $table .= "<td>{$cidade}</td>";
    $table .= "<td>{$telefone}</td>";
 $table .= '</tr>';


// fechamento da tabela
$table .= '</tbody>';
$table .= '</table>';

// mostrar na tela
echo $table;