<?php
    // homepage
    if(isset($_GET['home'])){
        // loads controller 
		include 'application/controllers/home.php';
		exit();
    // defualt page load
	}else{
        // loads
        include 'application/controllers/home.php';
        exit();
    }
?>