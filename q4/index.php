<<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> CURSO PHP UTD </title>

		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


	</head>
    <body>
        <div class="conteiner">
            <div class="row">
                <div class="col-4"></div>
                    <div class="col-4">
                    <hr><h2> CRIAR TABELA </h2><hr>
                    <hr><h4> Informe os parâmetros: </h4><hr>
                        <form method="POST" action="criaTabela.php">
                            <div class="row">
                                <div class="col-6">
                                    <label>Linhas:</label>
                                    <input type="text" name="linha" id="linha"><br>
                                </div>
                                <div class="col-6">
                                    <label>Colunas:</label>
                                    <input type="text" name="coluna" id="coluna"><br><br>
                                </div>
                            </div>
                            <p>
                                <button class="btn btn-outline-primary" onClick="history.go(-1)"> <i class="fa fa-th"></i> Criar </button>
                            </p>
                        </form>
                    </div>
                <div class="col-4"></div>
            </div>
        </div>
    </body>
</html>