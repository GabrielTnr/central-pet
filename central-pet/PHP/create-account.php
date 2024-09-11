<?php
    if (isset($_POST['submit'])) {
        
        include_once('config.php');

        $nomeUsuario = $_POST['nome-usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nomeAnimal = $_POST['nome-do-animal'];
        $especie = $_POST['especie'];
        $raca = $_POST['raca'];
        $pelagem = $_POST['pelagem-do-animal'];
        $dataNasc = $_POST['data-de-nascimento'];
        $sexo = $_POST['sexo'];
        $portAnimal = $_POST['porte-do-animal'];
        $naturalidade = $_POST['naturalidade'];

        $result = mysqli_query($conexao, "INSERT INTO `informacoes-pet` (`nome-usuario`, email, senha, `nome-animal`, especie, raca, pelagem, data, sexo, `porte-animal`, Naturalidade) VALUES ('$nomeUsuario', '$email', '$senha', '$nomeAnimal', '$especie', '$raca', '$pelagem', '$dataNasc', '$sexo', '$portAnimal', '$naturalidade')");
        
        
        
/*      print_r($_POST['nome-usuario']);
        print_r('<br>');
        print_r($_POST['email']);
        print_r('<br>');
        print_r($_POST['senha']);
        print_r('<br>');
        print_r($_POST['confirmar-senha']); */
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central Pet</title>
    <link rel="stylesheet" href="../CSS/create-account.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../Imagens/logo-amarela.png">

</head>
<body>
    <header>
        <nav>
            <a href="../HTML/index.html">
            <section class="section-01">
                <figure>
                    <img src="../Imagens/logo-amarela.png" alt="Imagem da Logo" />
                </figure>
                <p>Central Pet</p>
            </section>
            </a>
        </nav>
    </header>
    <section id="section-02">
        <div id="imagem">
            <img src="../Imagens/veterinario.png" alt="">
        </div>
    </section>
    <section id="section-03">
        <div class="login">
            <form action="create-account.php" method="POST">
                <img src="../Imagens/logo-amarela.png" alt=""></br>
                <div class="row">
                    <div id="input-box-02" class="input-box">
                        <input type="text" name="nome-usuario" id="nome-usuario" placeholder="Nome">
                    </div>
                    <div id="input-box-02" class="input-box">
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>                    
                </div>
                <div class="row">
                    <div id="input-box-02" class="input-box">
                        <input type="text" name="nome-do-animal" id="nome-do-animal" placeholder="Nome do animal">
                    </div>
                    <div id="input-box-02" class="input-box">
                        <input type="text" name="especie" id="especie" placeholder="Espécie">
                    </div>
                </div>
                <div class="row">
                    <div id="input-box-02" class="input-box">
                        <input type="text" name="raca" id="raça" placeholder="Raça">
                    </div>
                    <div id="input-box-02" class="input-box">
                        <input type="text" name="data-de-nascimento" id="data-de-nascimento" placeholder="Data de nascimento">
                    </div>
                </div>
                <div class="row">
                    <div id="input-box-02" class="input-box">
                        <input type="text" name="porte-do-animal" id="porte-do-animal" placeholder="Porte do animal">
                    </div>
                    <div id="input-box-02" class="input-box">
                        <input type="text" name="pelagem-do-animal" id="pelagem-do-animal" placeholder="Pelagem do animal">
                    </div>
                </div>
                <div class="row">
                    <div id="input-box-02" class="input-box">
                        <input type="text" name="sexo" id="sexo" placeholder="Sexo">
                    </div>
                    <div id="input-box-02" class="input-box">
                        <input type="text" name="naturalidade" id="naturalidade" placeholder="Naturalidade">
                    </div>
                </div>
                <div class="row">
                    <div id="input-box-02" class="input-box">
                        <input type="password" name="senha" id="senha" placeholder="Senha">
                        <i class='bx bx-lock-alt'></i>
                    </div>
                    <div id="input-box-02" class="input-box">
                        <input type="password" name="confirmar-senha" id="senha" placeholder="Confirmar senha">
                        <i class='bx bx-lock-alt'></i>
                    </div>                    
                </div>
                <a href="login.php">
                    <input class="btn" type="submit" name="submit" value="CONFIRMAR">                    
                </a>

            </form>
        </div>
    </section>
</body>

</html>
