<?php
 include('db.php');


    function verificalogin(){
        $email = $_POST['email'];
        $pass  = $_POST['pass'];
        $res = login($email,$pass);
    }


    echo verificalogin();

?>