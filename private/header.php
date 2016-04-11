<?php

    if($_SERVER['REQUEST_URI'] != '/' || $_SERVER['REQUEST_URI'] != 'cadastro.php'){
        session_start();
        if (!isset($_SESSION['usuarioID'])) {		//Verifica se há seções
            session_destroy();						//Destroi a seção por segurança
            header("Location: login.php"); exit;	//Redireciona o visitante para login
        }
    }    	//A seção deve ser iniciada em todas as páginas

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>QM - Buscar Fila</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style-custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="buscar.php" class="brand-logo"><img src="../images/logo-container.png"></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="buscar.php">Buscar fila</a></li>
            <li><a href="status.php">Status</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="inicio.php">Buscar fila</a></li>
            <li><a href="status.php">Status</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>