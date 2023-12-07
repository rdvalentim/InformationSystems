<?php
    require_once "model/au13_pessoa.php";

    $pessoa = new pessoa();
    $pessoa->setNome("Ramon");
    $pessoa->setSobrenome("Valentim");
    $pessoa->setDataNascimento(new DateTime("2002-02-13"));

    $pessoa->getTelefone()->setTipo(1);
    $pessoa->getTelefone()->setNome("WhatsApp");
    $pessoa->getTelefone()->setValor("(47) 99961-3119");

    $pessoa->getEndereco()->setLogradouro("Rua Otto Paulo Bein");
    $pessoa->getEndereco()->setBairro("Boa Vista");
    $pessoa->getEndereco()->setCidade("Pouso Redondo");
    $pessoa->getEndereco()->setCEP("89172-000");
    $pessoa->getEndereco()->setEstado("SC");

    echo $pessoa->toJson();

    $membrosFamilia = [];

    $pai = new pessoa();
    $pai->setNome("Sandro");
    $pai->setSobrenome("Valentim");
    $pai->setDataNascimento(new DateTime("1974-04-07"));
    $membrosFamilia[] = $pai;

    $mae = new pessoa();
    $mae->setNome("Mara");
    $mae->setSobrenome("Cipriano");
    $mae->setDataNascimento(new DateTime("1980-03-18"));
    $membrosFamilia[] = $mae;

    $irma = new pessoa();
    $irma->setNome("Jessica");
    $irma->setSobrenome("Valentim");
    $irma->setDataNascimento(new DateTime("1997-12-23"));
    $membrosFamilia[] = $irma;
    
    $familiaJson = json_encode($membrosFamilia, JSON_PRETTY_PRINT);

    //Alterar para o seu nome de usuario do windows
    $user = '\ramon';
    $diretorio = "C:\Users$user\Downloads";

    if (!is_dir($diretorio) || !is_writable($diretorio)) {
        die("O diretório '$diretorio' não existe ou não é gravável. Verifique as permissões.");
    }

    $file = $diretorio . '/familia_dados.txt';
    if(file_put_contents($file, $familiaJson) !== false) {
        echo "Dados da família salvos com sucesso em $file.";
    } else {
        echo "Erro ao salvar dados da família.";
    }    
?>