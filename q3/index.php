<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>CURSO PHP UTD</title>
		<meta charset="UTF-8" />
        <!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	</head>
	<body>
    <div class="container">
		<div class="row">
			<div class="col-4"></div>
				<div class="col-4">
                    <hr><h1> LOGIN </h1><hr>

                        <form name="" method="POST" action="">
                            <div>
                                <label>Usuário: <input type="text" name="user" class="form-control" /></label><br /><br />
                            </div>
                            <div>
                                <label>Senha: <input type="password" name="pass" class="form-control" /></label><br /><br />
                            </div>
                                <input type="submit" name="submit" value="ENTRAR" />
                        </form>
                        <?php
                            /* Declaração de Variáveis */
                            $user = @$_REQUEST['user'];
                            $pass = @$_REQUEST['pass'];
                            $submit = @$_REQUEST['submit'];
                            
                            /* Declaração das variáveis que possuem os usuarios e as senhas */
                            $user1 = 'mauricelio';
                            $pass1 = '123456';
                            
                            $user2 = 'admin';
                            $pass2 = '123456';
                            
                            if($submit){
                                
                                
                                if($user == "" || $pass == ""){
                                    echo "<script:alert('Por favor, preencha todos os campos!');</script>";
                                }
                                
                                else{
                                    if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
                                        session_start();
                                        $_SESSION['usuario']=$user;
                                        $_SESSION['senha']=$pass;
                                        header("Location: pagina.php");
                                    }
                                    
                                    
                                    else{
                                        echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
                                    }
                                }
                            }
                        ?>
                </div>
            <div class="col-4"></div>
        </div>
    </div>
	</body>
</html>