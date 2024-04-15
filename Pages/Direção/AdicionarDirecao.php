<?php
    session_start();
    if ((!isset($_SESSION["usuario"]) == true)and (!isset($_SESSION["senha"]) == true)) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: ../index.html');
    }

    if(isset($_POST['submit'])){
        
        $nome = $_POST['Nome'];
        $CPF = $_POST['CPF'];
        $DataNascimento = $_POST['DataNascimento'];
        $Email = $_POST['Email'];
        $senha = $_POST['Senha'];
        if (($_POST['Senha']!=$_POST['CSenha'])) {
            header('Location: AdicionarDirecao.php');
        }else{
            include_once('../../config.php');

            $result = mysqli_query($conexao, "INSERT INTO direção(Usuário,CPF,DataNacimento,Email,Senha) VALUES ('$nome','$CPF','$DataNascimento','$Email','$senha')");
        }
        
    }
    $_logado = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Direção</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../../Estilos/Login-e-Base.css">
    <link rel="stylesheet" href="../../Estilos/Adicionar.css">
</head>
<body>
    <header>
        <p>Edu Station</p>
        <h1><a class="linkName" href="../inicio.php">Direção Workstation</a></h1>
        <span id="usuario" class="material-symbols-outlined" onclick="menu()">
            account_circle
        </span>
        <ul id="user" class="fora">
            <a href="AlterarDirecao.php" class="Opções"><li>Alterar</li></a>
            <a href="../../dados/Sair.php" class="Opções"><li>Sair</li></a>
        </ul>
    </header>
    <main onclick="fechar()">
        <h2><a class="linkName" href="DadosDirecao.php">Direção</a></h2>
        <form action="AdicionarDirecao.php" method="POST">
            <fieldset class="Formulário">
                <legend>Cadastro Direção</legend>
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" name="Nome" required><br>
                    <label for="CPF">CPF</label>
                    <input type="text" name="CPF" required minlength="11" required maxlength="11" required><br>
                    <label for="DataNascimento">Data de Nascimento</label>
                    <input type="Date" name="DataNascimento" required><br>
                    <label for="Email">email</label>
                    <input type="text" name="Email" required><br>
                    <label for="Senha">Senha</label>
                    <input type="text" name="Senha" required minlength="6" required maxlength="20">
                    <label for="ConfirmaSenha">Confirme a senha</label>
                    <input type="text" name="CSenha" required minlength="6" required maxlength="20">
                    
                    <input id="Alterar" type="submit" name="submit" class="botão" value="Criar Usuário">
                </div>
            </fieldset>
        </form>
        
    </main>
    <script src="../menu.js"></script> 
</body>
</html>