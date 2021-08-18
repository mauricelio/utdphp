<<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> CURSO PHP UTD </title>

		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <style>
                p {
                font-size: 22px;
                }
        </style>

	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
					<hr><h1> MÉDIA | MAIOR | MENOR </h1><hr>
					<hr><h3> Resultado: </h3><hr>
                    <p>
                    <?php

                        $num1 = $_POST['n1'];
                        $num2 = $_POST['n2'];
                        $num3 = $_POST['n3'];
                        $num4 = $_POST['n4'];
                        $num5 = $_POST['n5'];
                        $num6 = $_POST['n6'];
                        $num7 = $_POST['n7'];
                        $num8 = $_POST['n8'];
                        $num9 = $_POST['n9'];
                        $num10 = $_POST['n10'];


                        $media = ($num1+$num2+$num3+$num4+$num5+$num6+$num7+$num8+$num9+$num10)/10;

                        $valMax = max(array($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10));
                        $valMin = min(array($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10));

                        echo "A média é $media </font><br>";
                        echo "O maior valor é $valMax <br>";
                        echo "O menor valor é $valMin <br>";

                    ?>
                    </p>
                    <div>
                        <p class="text-end">
                            <button class="btn btn-outline-primary" onClick="history.go(-1)"> <i class="fa fa-calculator"></i> Voltar </button>
                        </p>
                    </div>
                </div>            
            </div>
            <div class="col-2"></div>
		</div>		
	</body>
</html>