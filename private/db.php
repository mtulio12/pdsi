<?php
date_default_timezone_set("America/Araguaina");//fuso brasilia

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
    $stmt->bindValue(":user_pass", md5($pass));
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $res;
}
function cadastrar($nome,$email,$password){
    global $conexao;
    $today = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
    $registered = date("Y-m-d H:i:s", $today);

    $stmt = $conexao->prepare("INSERT INTO users (user_name, user_email, user_password, user_registered)
            VALUES (:user_name, :user_email, :user_password, :user_registered);");
    $stmt->bindValue(":user_name", $nome);
    $stmt->bindValue(":user_email", $email);
    $stmt->bindValue(":user_password", md5($password));
    $stmt->bindValue(":user_registered", $registered);

    return $stmt->execute();
        //echo "\nPDOStatement::errorCode(): ";
        //print $stmt->errorCode();

}
?>