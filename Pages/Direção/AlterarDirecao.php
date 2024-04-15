<?php
    session_start();
    include("../../config.php");
    if ((!isset($_SESSION["usuario"]) == true)and (!isset($_SESSION["senha"]) == true)) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: ../index.html');
    }
    if(!empty($_GET['idDireção'])){
        
        $id = $_GET['idDireção'];
        $sqlSelect = "SELECT * FROM direção WHERE idDireção=$id";
        $result = $conexao->query($sqlSelect);

        if ($result->num_rows > 0) {

            while ($direcaoData = mysqli_fetch_assoc($result)) {
                $nome = $direcaoData['Usuário'];
                $CPF = $direcaoData['CPF'];
                $DataNascimento = $direcaoData['DataNacimento'];
                $Email = $direcaoData['Email'];
                $senha = $direcaoData['Senha'];
            }
        } else {
            header("Locationa: ../Inicio.php");
        }    
    }else{
        header("Location: ../inicio.php");
    }
    $_logado = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados da Direção</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../../Estilos/Login-e-Base.css">
    <link rel="stylesheet" href="../../Estilos/Alterar.css">
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
        <form action="../../dados/SalvarEdcoes.php" method="POST">
            <fieldset class="Formulário">
                <legend>Alterar Direção</legend>
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" name="Nome" value="<?php echo $nome ?>" required><br>
                    <label for="CPF">CPF</label>
                    <input type="text" name="CPF" value="<?php echo $CPF ?>" required minlength="11" required maxlength="11" required><br>
                    <label for="DataNascimento">Data de Nascimento</label>
                    <input type="Date" name="DataNascimento" value="<?php echo $DataNascimento ?>" required><br>
                    <label for="Email">email</label>
                    <input type="text" name="Email" value="<?php echo $Email ?>" required> 
                    <input type="button" id="BtnAlterar" class="botão" value="Alterar Senha" onclick="MostrarS()">
                    <div id="senha" class="campo">
                        <label for="Senha">Senha</label>
                        <input type="password" name="Senha" minlength="6" maxlength="20"><br>
                        <label for="NSenha">Nova Senha</label>
                        <input type="password" name="NSenha" minlength="6" maxlength="20">
                        <label for="ConfirmaSenha">Confirme a senha</label>
                        <input type="password" name="CSenha" minlength="6" maxlength="20">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="hidden" name="ASenha" value="<?php echo $senha?>">
                    <input id="Alterar" type="submit" name="update" class="botão" value="Alterar">
                </div>
            </fieldset>
        </form>
    </main>
    <script src="../menu.js"></script> 
</body>
</html>