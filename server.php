<?php 
function soma($a, $b) {
    return $a + $b;
}
function sub($a, $b) {
    return $a - $b;
}
function div($a, $b) {
    return $a / $b;
}
function multi($a, $b) {
    return $a * $b;
}

$arg = array('uri' => 'http://anapaula-soap.com');

$server = new SoapServer(null, $arg);

$server->addFunction('soma');
$server->addFunction('sub');
$server->addFunction('div');
$server->addFunction('multi');

$server->handle();

?>