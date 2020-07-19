<?php
// Verifica se o usuário está logado. Se não estiver, redireciona-o para a página de login

if( !isset($_SESSION["logado"]) ) {
    session_destroy();
    header("Location: login.php");
    exit;
}

?>

