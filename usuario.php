<?php
require('database.php');



class Usuario{
   
    public function login($email, $senha){

        global $pdo;
            $sql = "SELECT * FROM login where email = :email and senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("senha", $senha);
            $sql->execute();
    }
}

?>