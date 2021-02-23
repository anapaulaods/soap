<?php

$arg = array('uri' => 'http://anapaula-soap.com', 'location' => 'http://localhost/soap/server.php');
$client = new SoapClient(null, $arg);

echo'Calculadora PHP';
echo'<form method="post">
    <input type="number" name="a" placeholder="informe um número...">
    <input type="number" name="b" placeholder="informe um número...">
    <input type="submit">
</form>';


if ($_POST == true) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    echo("soma: ". $client->soma($a,$b));
    echo("<br>subtração: ". $client->sub($a,$b));
    echo("<br>divisão: ". $client->div($a,$b));
    echo("<br>multiplicação: ". $client->multi($a,$b));
}

?>