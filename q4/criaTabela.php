<?php

$linha = $_POST['linha'];
$coluna = $_POST['coluna'];

$table = '<table border="1" style="width:100%">';

for($j=0;$j<$linha;$j++){
$table .= '<tr>';
    for($i=0;$i<$coluna;$i++){
    $table .= "<td>&nbsp</td>";
    }
$table .= '</tr>';
}

$table .= '</table>';

// mostrar na tela
echo $table;
echo "<br><br>Tabela $linha linhas por $coluna colunas <br>";

?>