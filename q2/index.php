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
					<hr><h1> MÉDIA | MAIOR | MENOR </h1><hr>
					<hr><h3> Informe um número em cada campo: </h3><hr>
					<form action="calcula.php" method="POST">

						<div class="row">
                            <div class="col-2">
                                <label> <i class="fa fa-check"></i>1º Número</label><br>
						        <input type="text" class="form-control" name="n1"><br><br>
                            </div>
                            <div class="col-2">
                                <label> <i class="fa fa-check"></i>2º Número</label><br>
	    					    <input type="text" class="form-control" name="n2"><br><br>
                            </div>
							<div class="col-2">
                                <label> <i class="fa fa-check"></i>3º Número</label><br>
	    					    <input type="text" class="form-control" name="n3"><br><br>
                            </div>
							<div class="col-2">
                                <label> <i class="fa fa-check"></i>4º Número</label><br>
	    					    <input type="text" class="form-control" name="n4"><br><br>
                            </div>
							<div class="col-2">
                                <label> <i class="fa fa-check"></i>5º Número</label><br>
	    					    <input type="text" class="form-control" name="n5"><br><br>
                            </div>
                        </div>
						<div class="row">
                            <div class="col-2">
                                <label> <i class="fa fa-check"></i>6º Número</label><br>
						        <input type="text" class="form-control" name="n6"><br><br>
                            </div>
                            <div class="col-2">
                                <label> <i class="fa fa-check"></i>7º Número</label><br>
	    					    <input type="text" class="form-control" name="n7"><br><br>
                            </div>
							<div class="col-2">
                                <label> <i class="fa fa-check"></i>8º Número</label><br>
	    					    <input type="text" class="form-control" name="n8"><br><br>
                            </div>
							<div class="col-2">
                                <label> <i class="fa fa-check"></i>9º Número</label><br>
	    					    <input type="text" class="form-control" name="n9"><br><br>
                            </div>
							<div class="col-2">
                                <label> <i class="fa fa-check"></i>10º Número</label><br>
	    					    <input type="text" class="form-control" name="n10"><br><br>
                            </div>
                        </div>


						<div>
							<p class="text-end">
								<button class="btn btn-outline-primary"> <i class="fa fa-calculator"></i> Calcular </button>
							</p>
						</div>

					</form>

				</div>
				<div class="col-2"></div>
			</div>
		</div>

			
	</body>
</html>