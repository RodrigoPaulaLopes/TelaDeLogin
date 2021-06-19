<?php

  $localhost = 'localhost';
  $dbname = "login1";
  $username = "root";
  $senha = "";

  global $pdo;
  try{
      $pdo = new PDO("mysql:dbname=".$dbname.";host=".$localhost, $username, $senha);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $e){
    $e->getMessage('erro:'.$e->getMessage());
  }

    


  


    
       



?>
