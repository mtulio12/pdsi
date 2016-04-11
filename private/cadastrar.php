<?php
    include('db.php');
    date_default_timezone_set("America/Araguaina");//fuso brasilia
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);

    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $password  = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $today = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
    $registered = date("Y-m-d H:i:s", $today);

    try{
        $stmt = $conexao->prepare("INSERT INTO users (user_name, user_email, user_password, user_registered)
                VALUES (:user_name, :user_email, :user_password, :user_registered);");
        $stmt->bindValue(":user_name", $nome);
        $stmt->bindValue(":user_email", $email);
        $stmt->bindValue(":user_password", md5($password));
        $stmt->bindValue(":user_registered", $registered);
        $stmt->execute();
        echo 'Cadastro realizado com sucesso';
        //echo "\nPDOStatement::errorCode(): ";
        //print $stmt->errorCode();
    }catch(PDOException $erro){
        echo $erro->getMessage();
        exit;
    }
?>