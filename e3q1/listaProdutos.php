<?php
    $produtos = file("produtos.txt");
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">      
    <title>SISTEMA UTD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <hr><h3>Lista de Produto</h3><hr>

                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                        <th>Produto</th>
                        <th>Moto</th>
                        <th>Fabricante</th>
                        <th>Preço (R$)</th>
                        <th>Quantidade</th>
                    </thead>

                    <tbody>
                        <?php
                            foreach ($produtos as $produto){
                                //Quebrando a string
                                $dado = explode(" ; ", $produto);
                        ?>
                            <tr>
                                <td><?=$dado[0];?></td>
                                <td><?=$dado[1];?></td>
                                <td><?=$dado[2];?></td>
                                <td><?=$dado[3];?></td>
                                <td><?=$dado[4];?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="formulario.php" class="btn btn-primary">Cadastro</a>
                <a href="admin.php" class="btn btn-primary">Início</a>


            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript">
        $(document).ready( function () {
             $('#myTable').DataTable();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>


</html>