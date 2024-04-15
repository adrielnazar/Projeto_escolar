<?php
    include_once("../config.php");

    if(isset($_POST["update"])){
        $id = $_POST["id"];
        $nome = $_POST['Nome'];
        $CPF = $_POST['CPF'];
        $DataNascimento = $_POST['DataNascimento'];
        $Email = $_POST['Email'];
        $senha = $_POST['NSenha'];
    
        

        if ((!isset($_POST["Senha"]) == true) or (!isset($_POST["NSenha"]) == true) or (!isset($_POST["CSenha"]) == true) or ($_POST["NSenha"]!==$_POST["CSenha"]) or ($_POST["Senha"])!==$_POST['ASenha']) {
            $senha = $_POST['ASenha'];
        }
        $sqlUpdate = "UPDATE direção SET Usuário='$nome',CPF='$CPF',DataNacimento='$DataNascimento',Email='$Email',Senha='$senha' WHERE idDireção='$id'";
        $result = $conexao->query($sqlUpdate);
        
        header("Location: ../Pages/Direção/DadosDirecao.php");
    }
?>