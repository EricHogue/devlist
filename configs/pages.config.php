<?php
    if(isset($_GET['home'])){
		$pageName = "Homepage";
		include 'application/controllers/home.php';
		exit();
	}
?>