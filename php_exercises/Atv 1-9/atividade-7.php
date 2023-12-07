<?php
    $valorCarro = 22500.00;
    $valorParcela = 489.65;
    $qtdParcela = 60;

    $valorEmprestimo = $valorParcela * $qtdParcela;

    $juros = $valorEmprestimo - $valorCarro;

    echo "O carro a vista custa: R$ ".$valorCarro.".<br>
          Será pago o valor de R$ ".$juros." em juros.";
?>