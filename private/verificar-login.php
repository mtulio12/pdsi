<?php
 include('db.php');

    $email = $_POST['email'];
    $pass  = $_POST['pass'];
    $passowrdd = md5($pass);
    $resultado = login($email,$passowrdd);

    if(empty($resultado)){
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