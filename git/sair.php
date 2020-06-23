<?php
    session_start();
    //session_destroy();
    unset(
        $_SESSION['id'],
        $_SESSION['nome'],
        $_SESSION['email'],
    );

    header('Location: index.html');
?>