<?php 
    session_start();
    /* print_r($_REQUEST); */

    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        // acessa sistema
        
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

/*      print_r('Usuário: ' . $usuario);
        print_r('<br>');
        print_r('Senha: ' . $senha); */

        $sql = "SELECT * FROM `informacoes-pet` WHERE email = '$email' AND senha = '$senha'";

        $result = $conexao -> query($sql);

     /* print_r($sql);
        print_r($result); */

        if (mysqli_num_rows($result) < 1) {
            unset($SESSION['email']);
            unset($SESSION['senha']);
            header('Location: ../html/login.php');
            
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    } else {
        echo '<script>alert("Usuário inesistente");</script>';
    }
?>