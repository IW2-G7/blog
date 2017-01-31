<?php

    session_start();

    $dbhost = 'localhost';
    $dbname = 'blog';
    $dbuser = 'root';
<<<<<<< HEAD
    $dbpswd = 'root';

=======
    $dbpswd = '';
    //A partir d'ici, vous ne devez plus rien modifier
>>>>>>> 3b46ba264d446b92f6c1bf77ab099bb59e2a328e

    try{
        $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch(PDOexception $e){
        die("Une erreur est survenue lors de la connexion à la base de données");
    }

function admin(){
    if(isset($_SESSION['admin'])){
        global $db;
        $a = [
            'email'     =>  $_SESSION['admin'],
            'role'      =>  'admin'
        ];

        $sql = "SELECT * FROM admins WHERE email=:email AND role=:role";
        $req = $db->prepare($sql);
        $req->execute($a);
        $exist = $req->rowCount($sql);

        return $exist;
    }else{
        return 0;
    }
}

function hasnt_password(){
    global $db;

    $sql = "SELECT * FROM admins WHERE email = '{$_SESSION['admin']}' AND password = ''";
    $req = $db->prepare($sql);
    $req->execute();
    $exist = $req->rowCount($sql);
    return $exist;
}