<?php
    session_start();
    include("../../config.php");
    if ((!isset($_SESSION["usuario"]) == true)and (!isset($_SESSION["senha"]) == true)) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: ../index.html');
    }
    $_logado = $_SESSION['usuario'];
    if(!empty($_GET['search'])){
        $Busca = $_GET['search'];
        $sql = "SELECT * FROM direção WHERE Usuário LIKE '%$Busca%' ORDER BY idDireção DESC";
    }else{
        $sql = "SELECT * FROM direção ORDER BY idDireção DESC";
    }
    
    $result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da Direção</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../../Estilos/Login-e-Base.css">
    <link rel="stylesheet" href="../../Estilos/Pesquisa.css">
</head>
<body>
    <header>
        <p>Edu Station</p>
        <h1><a class="linkName" href="../inicio.php">Direção Workstation</a></h1>
        <span class="material-symbols-outlined" id="usuario" onclick="menu()">
            account_circle
        </span>
        <ul id="user" class="fora">
            <a href="AlterarDirecao.php" class="Opções"><li>Alterar</li></a>
            <a href="../../dados/Sair.php" class="Opções"><li>Sair</li></a>
        </ul>
    </header>
    <main onclick="fechar()">
        <h2>Direção 
            <a href="AdicionarDirecao.php">
                <span class="material-symbols-outlined" id="adição">
                add_circle
                </span>
            </a>
        </h2>
        <div class="pesquisa">
            <label for="DigitarNome">Digite o nome</label>
            <input type="search" class="pesquisa" id="pesquisar">
            <input type="button" class="botão" value="Pesquisa" onclick="searchData()">
        </div>
        <table>
            <thead>
                <tr class="Primeiro">
                    <td>Nome</td>
                    <td>CPF</td>
                    <td>Data de Nascimento</td>
                    <td colspan="2">Opções</td>
                </tr>
            </thead>
            <tbody>
                
                <?php
                 while ($direcaoData = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$direcaoData['Usuário']."</td>";
                    echo "<td>".$direcaoData['CPF']."</td>";
                    echo "<td>".$direcaoData['DataNacimento']."</td>";
                    echo "<td><a href='AlterarDirecao.php?idDireção=$direcaoData[idDireção]'>Alterar</a> <a href='../../dados/Deletar.php?idDireção=$direcaoData[idDireção]'>Excluir</a></td>";
                 }
                ?>
            </tbody>
        </table>
    </main>
    <script src="../menu.js">
        
    </script> 
    <script>
        var search = document.getElementById('pesquisar');

        search.addEventListener("keydown", function(event){
            if(event.key === "Enter"){
                searchData();
            }
        });

        function searchData(){
            window.location = 'DadosDirecao.php?search='+search.value;
        }
    </script>
</body>
</html>