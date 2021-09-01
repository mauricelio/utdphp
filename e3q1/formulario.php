<!DOCTYPE html>

<html>
<head>
    <title>SISTEMA UTD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <br><br>
                <hr><h3>Cadastro de Produto</h3><hr>

                <form action="recebeCadastro.php" method="POST">
                    <label>Nome do Produto</label><br>
                    <input type="text" class="form-control" name="nomeProduto" placeholder="Descrição do produto"><br><br>

                    <label>Modelo da Motocicleta</label><br>
                    <input type="text" class="form-control" name="modelo" placeholder="CG150, Factor150, Bros160, Intruder125 etc"><br><br>

                    <label>Fabricante da Motocicleta</label><br>
                    <input type="text" class="form-control" name="fabricante" placeholder="Honda, Yamaha, Suzuki etc"><br><br>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label>Preço do Produto</label><br>
                            <input type="text" class="form-control" name="precoProduto" placeholder="Use '.' para separar centavos"><br><br>
                        </div>
                        <div class="col-md-6">
                            <label>Quantidade</label><br>
                            <input type="text" class="form-control" name="quantidadeProduto" placeholder="Quantidade"><br><br>
                        </div>
                    </div>

                    <button class="btn btn-primary"> Cadastrar</button>
                    <a href="admin.php" class="btn btn-primary"> Início </a>
                    <a href="listaProdutos.php" class="btn btn-primary"> Lista </a>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>


</html>