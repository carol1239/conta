<?php
session_start();
    $saldo= isset($_SESSION["saldo"])? $_SESSION["saldo"]:0;
    $opera= isset($_GET["opera"])? $_GET["opera"]:0;
    $valor= isset($_GET["valor"])? $_GET["valor"]:0;

    if($opera == "debito"){
        $saldo = $saldo - $valor;
    }else if($opera == "credito"){
        $saldo = $saldo + $valor;
    }
    $_SESSION["saldo"] = $saldo;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Consultar Saldo</title>
	<link rel="stylesheet" href="pagina.css">
	<script type="text/javascript" src="nome.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<header>
		<div id="mensagemBemVindo">
			Bem-vindo (a), <span id="nome_usuario">fulano</span>.
		</div>
			<div id="saldoAtual">
				<h3>Saldo atual é: R$<?php echo $saldo; ?></h3>
			</div>
		</div>
	</header>
	<br>
	<center>
		<div id="formOperacao">
			<form>
				<fieldset id="operacao">
					<legend>Nova Operação</legend>

					<fieldset id="debOrCred" >
						<legend>Operação</legend>
						<input type="radio" name="opera" value="debito" checked>Débito <br>
						<input type="radio" name="opera" value="credito">Crédito <br>
					</fieldset>
					<fieldset>
							<legend>Valor (R$)</legend>
							<input type="number" name="valor" id="valor"<?php echo $valor; ?>>
					</fieldset>
					<br>
					<input type="submit" name="operacao" value="Realizar Operacao" />
					
					<input type="button" value="Atualizar Saldo" onclick="location = location.pathname;">
				</fieldset>
			</form>
			<form>
				<h3> Seu novo saldo é: R$<?php echo $saldo;?></h3>
			</form>
		</div>
		<p>Dupla: ARYANE GABRIELLE CARDOSO E CAROLAINE LOPES.</p>

				<p>	Redes de Computadores</p>
						<p>IFPR TB</p>
						<p>	2018</p>
	</center>

</body>
</html>
