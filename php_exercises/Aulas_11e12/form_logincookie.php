<?php
    session_start();
    $sessionStarted = true;

    
    if (!isset($_COOKIE["usuario"])) {
        echo "O valor do cookie usuário não foi definido. <br>";
    }
    if (!isset($_COOKIE["time"])) {
        echo "O valor do cookie time não foi definido. <br>";
    }

    if (!isset($_SESSION['usuario'])) {
        if(isset($_POST['campo_usuario'])) {
            $_SESSION['usuario'] = $_POST['campo_usuario'];
            $_SESSION['started'] = time(); 

            setcookie("usuario", $_POST['campo_usuario'], time()+60*5,"/");
            setcookie("started", $_SESSION['started'], time()+60*5,"/");

            echo "Sessão iniciada e usuário registrado <br>";
            echo '<a href="form_login.php">Clique aqui para continuar </a>';
        }
    } else {
        $sessionStarted = false;
    }

    if($sessionStarted) {
        $_SESSION['lastrequest'] = time();
        $lastRequest = strtotime(gmdate("Y-m-d\TH:i:s\Z", $_SESSION['lastrequest']));
        if (isset($_SESSION['started'])) {
            $startSess = strtotime(gmdate("Y-m-d\TH:i:s\Z", $_SESSION['started']));
            $timeElapsed = $lastRequest-$startSess;
        }

        echo "Identificador de sessão: " . session_id() . "<br>";
        echo "Dados da sessão:<br>" . print_r($_SESSION) . "<br>";
        if(isset($timeElapsed)) {
            echo "Sessão iniciada há: " . $timeElapsed . "s<br>";
        } 
        echo '<a href="form_login.php">Continue</a>';
    }
?>