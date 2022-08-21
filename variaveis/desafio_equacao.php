<div class="titulo">Desafio Equação</div>

<?php 

    $numeradorA = (6 * (3 + 2)) ** 2;
    $denA = 3 * 2 ;

    $numeradorB = (1 - 5 ) * (2 - 7);
    $denB = 2;

    $superiorA = $numeradorA / $denA;
    $superiorB = ($numeradorB / $denB) ** 2;

    $superior = ($superiorA - $superiorB) ** 3;
    $inferior = 10 ** 3;

    $final = $superior / $inferior;

    echo "O resultado final é: ". $final . ""

?>