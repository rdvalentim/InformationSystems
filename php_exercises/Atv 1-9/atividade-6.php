<?php
    $valorDisponivel = 50.00;

    //valor por kg
    $precoMaca = 2.50;
    $precoMelancia = 3.00;
    $precoLaranja = 1.50;
    $precoRepolho = 2.00;
    $precoCenoura = 1.20;
    $precoBatatinha = 1.80;

    //quantidade em kg
    $qtdMaca = 2.5;
    $qtdMelancia = 4.0;
    $qtdLaranja = 3.0;
    $qtdRepolho = 1.5;
    $qtdCenoura = 2.0;
    $qtdBatatinha = 2.5;

    $totalMaca = $precoMaca * $qtdMaca;
    $totalMelancia = $precoMelancia * $qtdMelancia;
    $totalLaranja = $precoLaranja * $qtdLaranja;
    $totalRepolho = $precoRepolho * $qtdRepolho;
    $totalCenoura = $precoCenoura * $qtdCenoura;
    $totalBatatinha = $precoBatatinha * $qtdBatatinha;

    $totalCompra = $totalMaca + $totalMelancia + $totalLaranja + $totalRepolho + $totalCenoura + $totalBatatinha;

    if ($totalCompra > $valorDisponivel) {
        $saldoNegativo = $totalCompra - $valorDisponivel;
        echo "<span style='color: red;'>Joãozinho não tem dinheiro suficiente. Faltam R$ " . number_format($saldoNegativo, 2) . ".</span>";
    } elseif ($totalCompra == $valorDisponivel) {
        echo "<span style='color: green;'>Saldo para compras esgotado.</span>";
    } else {
        $saldoPositivo = $valorDisponivel - $totalCompra;
        echo "<span style='color: blue;'>Joãozinho ainda pode gastar R$ " . number_format($saldoPositivo, 2) . ".</span>";
    }
    
    // Imprima o valor da compra
    echo " O valor total da compra foi de R$ " . number_format($totalCompra, 2) . ".";
?>