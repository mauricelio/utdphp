<!DOCTYPE html>
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>SISTEMA UTD | LOGIN</title>


    </head>
    <body>
        <div class="container">
            <div class="row d-flex flex-row justify-content-center mt-5">
                <div class="col-lg-5">
                    <?php  
                        session_start();

                        if(!isset($_SESSION['e3q1'])){
                            header("location: index.php?msg=acesso_nao_permitido");
                        }
                        
                        echo "<h3>Olá, você está na área admin !</h3>";
                    ?>
                    <br><br>
                    <a href="formulario.php" class="btn btn-primary"> Cadastrar Produto </a>
                    <a href="listaProdutos.php" class="btn btn-primary"> Listar Produtos </a>
                    <a href="logout.php" class="btn btn-primary"> SAIR </a>
                </div>
            </div>  
        </div>  
    </body>
</html>