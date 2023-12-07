<?php
    $num1 = 22;
    $num2 = 5;
    $num3 = 8;

    $soma =  $num1 +  $num2 +  $num3; 

    if ($num1 > 10) {
        echo "<p style='background: azul;'>A soma dos valores é: ".$soma."</p>";
    } elseif ($num2 < $num3) {
        echo "<p style='color: verde;'>A soma dos valores é: ".$soma."</p>";
    } elseif ($num3 < $num1 && $num3 < $num2) {
        echo "<p style='color: vermelho;'>A soma dos valores é: ".$soma."</p>";
    }
?>