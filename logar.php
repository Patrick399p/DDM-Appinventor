<?php
     include_once 'conexao.php';

     $email = $_GET['email']; // pseudo variavel $_POST
     $senha = $_GET['senha'];


     // executar uma pesquisa no bd
     $sql = $dbcon->query("SELECT * FROM tblogin WHERE email='$email' AND senha='$senha'");

    //var_dump($sql);




    if(mysli_num_rows($sql)>0){
        echo "login_ok"
    }else{
        echo "login_erro"
    }

?>