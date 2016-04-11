<?php

try{
    //$conexao = new \PDO("mysql:host=localhost;dbname=nazzaho1_db_qm","nazzaho1_user_qm","qm@123.");
    $conexao = new \PDO("mysql:host=localhost;dbname=nazzaho1_db_qm","root","App@1.23");
}catch(\PDOException $e){
    die("Erro:".$e->getCode().$e->getMessage());
}

function login($email,$pass){
    global $conexao;
    $stmt = $conexao->prepare("SELECT * FROM `users` where user_email = :user_email and user_password = :user_pass");
    $stmt->bindValue(":user_email", $email);
    $stmt->bindValue(":user_pass", $pass);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($res);
}
?>