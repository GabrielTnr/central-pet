<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central Pet</title>
    <link rel="stylesheet" href="../CSS/login.css">
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
            <img src="../Imagens/vererinaria.png" alt="">
        </div>
    </section>
    <section id="section-03">
        <div class="login">
            <form action="../PHP/teste-login.php" method="POST">
                <img src="../Imagens/logo-amarela.png" alt=""></br>
                <div class="input-box">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <i class='bx bx-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="senha" id="senha" placeholder="Senha">
                    <i class='bx bx-lock-alt'></i>
                </div>
                <input class="btn" type="submit" name="submit" value="Enviar">
                <div class="register">
                    <p>
                        <a href="#">esqueceu a senha</a>
                    </p>
                </div>
                <div class="register">
                    <p>
                        <a href="create-account.php">criar conta</a>
                    </p>
                </div>
            </form>
        </div>
    </section>

</body>

</html>
