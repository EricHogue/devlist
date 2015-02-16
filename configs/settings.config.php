<?php 
    dbConnect();
    try{
        $sql = 'SELECT * FROM settings ORDER BY id';
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $result = $pdo->query($sql);
    }catch(pdoException $e){
        echo "There was an error getting settings information from the database";
    }
    $result = $statement->fetchAll();
    
    foreach($result as $row){
        $siteName = $row['sitename'];
    }
?>