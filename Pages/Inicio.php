<?php
    session_start();
    if ((!isset($_SESSION["usuario"]) == true)and (!isset($_SESSION["senha"]) == true)) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: ../index.html');
    }
    $_logado = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../Estilos/Login-e-Base.css">
    <link rel="stylesheet" href="../Estilos/Inicio.css">
</head>
<header>
    <p>Edu Station</p>
    <h1>Direção Workstation</h1>
    
    <span class="material-symbols-outlined" onclick="menu()">
        account_circle
    </span>
    <ul id="user" class="fora">
        <a href="" class="Opções"><li>Alterar</li></a>
        <a href="../dados/Sair.php" class="Opções"><li>Sair</li></a>
    </ul>
    
</header>
<body>
    <main onclick="fechar()">
    <nav>
        <a href="" class="botão">Direção</a>
        <a href="" class="botão">Docente</a>
        <a href="" class="botão">Aluno(a)</a>
        <a href="" class="botão">Diciplina</a>
        <a href="" class="botão">Turma</a>
    </nav>
    </main>
    <script src="menu.js"></script>
</body>
</html>