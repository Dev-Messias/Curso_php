<div class="titulo">Variáveis</div>

<?php 

$numeroA = 13;

echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;

echo $soma, '<br>';

echo isset($soma), '<br>';

unset($soma);//retirando valor atribuido a variavel
//echo isset($soma), '<br>';
var_dump($soma);

$variavel = 10;

?>