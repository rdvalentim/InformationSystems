<?php
    $valorAVista = 8654.00;
    $taxaJuros = 0.02;
    $parcelas = [24, 36, 48, 60];
    foreach ($parcelas as $numParcelas) {
        $taxaMensal = ($taxaJuros / 12);
        $numMeses = $numParcelas;
        $valorParcela = $valorAVista * ($taxaMensal) / (1-pow(1+$taxaMensal, -$numMeses));

        echo "Para $numParcelas vezes, o valor da parcela é R$ ".number_format($valorParcela, 2)."<br>";
        $taxaJuros += 0.003;
    }
?>
