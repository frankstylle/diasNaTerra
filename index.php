<?php
$dias = filter_input(INPUT_POST, 'nascimento');

$ano = substr($dias, 0, 4);
$mes = substr($dias, 5, 2);
$dia = substr($dias, 8, 2);

$data = mktime(0, 0, 0, $mes, $dia, $ano);

$dataAtual = date('d-m-Y');
$anoAtual = substr($dataAtual, 6, 4);
$mesAtual = substr($dataAtual, 3, 2);
$diaAtual = substr($dataAtual, 0, 2);

$dataAtual = mktime(0, 0, 0, $mesAtual, $diaAtual, $anoAtual);

$dif = $dataAtual - $data;
$resultado = round($dif / (60*60*24));

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <img src="https://gifs.eco.br/wp-content/uploads/2022/08/gifs-do-planeta-terra-girando-13.gif" width="400" alt="sdfsdf">
        <div class="text">
            <h2>Quer saber quantos dias</h2>
            <h2>você está online</h2>
            <h2>no servidor</h2>
            <h1>Terra?</h1>
        </div>
        <form action="index.php" method="post">
            <input type="date" placeholder="Data Nascimento" name="nascimento">
            <input type="submit" value="Enviar" name="enviar">
        </form>
    </main>

    <div class="resultado">
    <span><?= isset($resultado) ? $resultado : '' ?></span> dias online! 
    </div>

</body>

</html>