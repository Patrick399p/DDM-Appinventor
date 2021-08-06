<?php
     
     include_once 'conexao.php';

     $email = $_GET['email'];
     $senha = $_GET['senha'];
     $nome = $_GET['nome'];

     /* echo "Email: $email <br>";
     echo '"Senha: $senha <br>";
     echo "Nome: $nome <br>"; */

     $sql2 = $dbcon->query("SELECT * FROM tblogin WHERE email='$email'");

        if(mysqli_num_rows($sql2)>0){
            echo "email_erro";
        }else{
            echo "vai continuar ....";
        }

?>