<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['Usuário']) && !empty($_POST['Senha'])){
        include_once('../config.php');
        $usuario = $_POST['Usuário'];
        $senha = $_POST['Senha'];
        
        $sql = "SELECT * FROM Direção WHERE Usuário = '$usuario' and senha = '$senha'";

        $result = $conexao->query($sql);

        if (mysqli_num_rows($result) < 1) { 
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: ../index.html');
            
        }else{
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: ../Pages/Inicio.php');
        }

    }else{
        
    }

    

?>