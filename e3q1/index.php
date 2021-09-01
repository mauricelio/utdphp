<?php  

   session_start();

   if(isset($_SESSION['e3q1'])){
      $sessao = $_SESSION['e3q1'];
      header("location: ".$sessao['tipoAcesso'].'.php');
   }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>SISTEMA UTD | LOGIN</title>
        <style> 

        h2 {
            text-align: center;
        }
        
        h4 {
            text-align: center;
        }

        .card {
            border-radius: 10px;
        }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="row d-flex flex-row justify-content-center mt-5">
                <div class="col-lg-5">
                    <br><br>
                    <hr><h2>SISTEMA UTD</h2><hr>
                    <h4>Loja Motopeças</h4>
                    <div class="card">
                        <div class="card-body">
                            <?php  
                                if(isset($_GET['msg'])){
                                    switch($_GET['msg']){
                                    case 'usuario_incorreto':
                                            $texto = "Email não encontrado";
                                            $cor = "danger";
                                    break;

                                    case 'senha_incorreta':
                                            $texto = "Senha incorreta";
                                            $cor = "danger";
                                    break;

                                    case 'sessao_encerrada':
                                            $texto = "Sessão encerrada";
                                            $cor = "success";
                                    break;
                                    }
                            ?>

                                <div id="erro" class="alert alert-<?=$cor;?> alert-dismissible fade show" role="alert">
                                    <strong><?=$texto;?></strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="hide()";>
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            <?php } ?>
                            <form method="POST" action="login.php">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="senha" class="form-control" placeholder="senha">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script> setTimeout(function () {
            document.getElementById("erro").style.display = "none";
            }, 5000);
            function hide(){
            document.getElementById("erro").style.display = "none";
            }
        </script>
        
    </body>
</html>