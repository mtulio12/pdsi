<?php
    include('db.php');

    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);

    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $password  = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $md5_password = $password;

    $cadastre = cadastrar($nome,$email,$md5_password);

    if(empty($cadastre)){
        //var_dump($resultado);
        echo 0;
    }else{
        echo 1;
        foreach($resultado as $resultado){
            if(!isset($_SESSION)) 	//verifica se há sessão aberta
                session_start();		//Inicia seção
            //Abrindo seções
            $_SESSION['usuarioID']=$resultado['id'];
            $_SESSION['email']=$resultado['user_email'];
            exit;
        }
    }


?>