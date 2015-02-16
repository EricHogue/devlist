<?php
    function dbConnect(){
        // pdo database connection
        try{
            // connects using mysql connection information
            $pdo = new PDO('mysql:host=localhost;dbname=devlist;charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // if connection fails
        }catch(PDOException $e){
            echo "There was a problem connecting to your datase" . "<br />" . $e->getMessage();
            exit();
        }
        return $pdo;
    }
    
?>