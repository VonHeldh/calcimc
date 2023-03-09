<html>
<head>
	<title>Calculadora de IMC</title>
	<style>
		body {
			background-color: #F5F5F5;
			font-family: Arial, sans-serif;
		}

		h1 {
			color: #333;
			text-align: center;
		}

		form {
			width: 300px;
			margin: 0 auto;
			background-color: #FFF;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		input[type="number"] {
			padding: 10px;
			margin-bottom: 10px;
			width: 100%;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
			font-size: 16px;
		}

		input[type="submit"] {
			padding: 10px;
			background-color: #333;
			color: #FFF;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			font-size: 16px;
			width: 100%;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #555;
		}

		p {
			font-size: 18px;
			font-weight: bold;
			text-align: center;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<h1>Calculadora de IMC</h1>

	<form method="post">
		<label for="peso">Peso (em kg):</label>
		<input type="number" name="peso" id="peso" required>

		<label for="altura">Altura (em metros):</label>
		<input type="number" name="altura" id="altura" step="0.01" required>

		<input type="submit" value="Calcular">
	</form>

	<?php
		if ($_POST) {
			$peso = $_POST['peso'];
			$altura = $_POST['altura'];

			$imc = $peso / ($altura ** 2);

			if ($imc < 18.5) {
				$mensagem = "Você está abaixo do peso ideal. Procure um nutricionista para orientação.";
			} elseif ($imc >= 18.5 && $imc < 25) {
				$mensagem = "Seu peso está dentro do normal. Parabéns!";
			} elseif ($imc >= 25 && $imc < 30) {
				$mensagem = "Você está acima do peso ideal. Procure um nutricionista para orientação.";
			} else {
				$mensagem = "Você está com obesidade. Procure um nutricionista para orientação.";
			}

			echo "<p>Seu IMC é de: " . number_format($imc, 2) . "</p>";
			echo "<p>" . $mensagem . "</p>";
		}
	?>
</body>
</html>```