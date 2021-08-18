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
		<div class="container">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
					<hr><h1> CADASTRO DE CLIENTES </h1><hr>
					<form action="tabela.php" method="POST">
						<label> <i class="fa fa-user-circle"></i> Nome </label><br>
						<input type="text" class="form-control" name="nome" placeholder="Digite seu nome"><br><br>	

						<div class="row">
                            <div class="col-6">
                                <label> <i class="fa fa-id-card-o"></i> CPF </label><br>
						        <input type="text" class="form-control" name="cpf" placeholder="Digite seu CPF (somente números)"><br><br>
                            </div>

                            <div class="col-6">
                                <label> <i class="fa fa-id-card-o"></i> RG </label><br>
	    					    <input type="text" class="form-control" name="rg" placeholder="Digite seu RG (somente números)"><br><br>
                            </div>
                        </div>

						<label> <i class="fa fa-home"></i> Endereço </label><br>
						<input type="text" class="form-control" name="endereco" placeholder="Digite o endereço com o número do imóvel" ><br><br>

                        <div class="row">
                            <div class="col-6">
                                <label> <i class="fa fa-map-marker"></i> Bairro  </label><br>   
						        <input type="text" class="form-control" name="bairro"><br><br>
                            </div>
                            <div class="col-6">
                                <label> <i class="fa fa-map-o"></i> Cidade </label><br>
						        <input type="text" class="form-control" name="cidade"><br><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label> <i class="fa fa-phone"></i> Telefone </label><br>
    	    					<input type="tel" class="form-control" name="telefone" placeholder="XX XXXXX XXXX"><br><br>
                            </div>
                        </div>


						<div>
							<p class="text-end">
								<button class="btn btn-outline-primary"> <i class="fa fa-send"></i> Enviar Dados </button>
							</p>
						</div>

					</form>	

				</div>
				<div class="col-2"></div>
			</div>
		</div>

			
	</body>
</html>