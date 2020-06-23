<?php
    session_start();
    if(
        (!isset($_SESSION['id'])==true)&&
        (!isset($_SESSION['nome'])==true)&&
        (!isset($_SESSION['email'])==true)){
        
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['idade']);
        header('Location: index.html');
    }
    echo "Essa é página restrita, somente você tem acesso";
?>

<a href="sair.php">Sair</a>