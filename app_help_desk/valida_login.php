<?php

session_start();

// Variável que verifica se a autenticação foi realizada
$usuario_autenticado = false;

//USUARIOS DO SISTEMA

$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456')
);

foreach ($usuarios_app as $user) {

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado) {
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php');
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}

?>
