<?php
session_start();

function verificarLogin() {
    if (!isset($_SESSION['usuario_logado'])) {
        header("Location: login.php"); // Redireciona para login se não estiver logado
        exit();
    }
}

function logar($usuario) {
    $_SESSION['usuario_logado'] = $usuario; // Armazena dados do usuário na sessão
}

function logout() {
    session_unset(); // Remove todas as variáveis de sessão
    session_destroy(); // Destroi a sessão
    header("Location: login.php"); // Redireciona para a página de login
    exit();
}