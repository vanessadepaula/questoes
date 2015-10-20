<html>
<head>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>
<body background="fundo.jpg">
<div class = "container">
<br><font face="courier" color="white" size=20><center><b>Simulado: correção</b></center></font><br>

<?php
//Utilização das variaveis declaradas no grupo de botões radios na página prova.php
//Utilização do metodo POST(os dados da outra página são passados para essa de forma invisível), para pegar as alternativas marcadas pelo usuário
	$radios[0] = $_POST['radios'][0];
	$radios[1] = $_POST['radios1'][0];
	$radios[2] = $_POST['radios2'][0];
	$radios[3] = $_POST['radios3'][0];
	$radios[4] = $_POST['radios4'][0];

//Array que pega as respostas certas da página questões, utiliza-se para isso também o metodo POST
	$altc[0] = $_POST['certas1'];
	$altc[1] = $_POST['certas2'];
	$altc[2] = $_POST['certas3'];
	$altc[3] = $_POST['certas4'];
	$altc[4] = $_POST['certas5'];
	$saida = "<table border = '1' align='center'>";
	$saida .= "<tr>";
	$saida .= "<td>Questão</>";
	$saida .= "<td>Avaliação</>";
	$saida .= "<td>Opção marcada</>";
	$saida .= "<td>Opção correta</>";
	$saida .= "</tr>";
	for ($i=0; $i<=4; $i++){
		//if utilizado para comparar as opções que o usuário marcou com a resposta certa
		$saida .= "<tr>";
		$saida .= "<td>".($i+1)."</td>";
		if ($radios[$i] == $altc[$i]){
			$saida .= "<td>correta</td>";
		} else{
			$saida .= "<td>errada</td>";
		}
		if($radios[$i] == null){
			$saida .= "";
		}
		
		$saida .= "<td>".$radios[$i]."</td>";
		$saida .= "<td>".$altc[$i]."</td>";
		$saida .= "</tr>";
	}
	$saida .= "</table>";
	echo $saida;
?>
<center>
<br><br>
<a href="prova.php" class="nounderline">
<input type = "submit" value = "Voltar" <div id="preview" class="previewDiv" style="font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 15px; line-height: normal; font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif; color: rgb(255, 255, 255); text-shadow: rgb(34, 34, 34) 0px -1px 1px; border: 0px inset rgb(255, 255, 255); box-shadow: rgb(0, 0, 0) 7px 6px 2px; border-radius: 0px 30px; padding: 11px 13px; cursor: pointer; background: rgb(21, 162, 219);">
</div>
</center>
</div>

</body>

</html>
