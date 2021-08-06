<?php
     $host = "localhost";
     $usuario = "root";
     $senha = "";
     $banco = "bdlogin";

     $dbcon = new MySQL ("$host","$usuario","$senha","$banco");

     if($dbcon->connect_error){
         echo "conexao_erro";
     }  /* else{
         echo conexao_ok";
       } */
?>     