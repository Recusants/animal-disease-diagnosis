<?php
session_start();
if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}
	$link = mysqli_connect("localhost", "root", "", "animal");
	 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	if(isset($_POST['update'])){
		$name = $_GET['name'];
	    $mtime = $_POST['mtime'];
	    $symptoms = $_POST['symptoms'];
	    $treatment = $_POST['treatment'];
	    $transmission = $_POST['transmission'];
	    $suggestions = $_POST['suggestions'];
	    $causes = $_POST['causes'];
	    $adv_symptoms = $_POST['adv_symptoms']; 

	    
	    $query = "UPDATE `diseases` SET `mtime` = '$mtime', `symptoms` = '$symptoms', `treatment` = '$treatment', `transmission` = '$transmission', `suggestions` = '$suggestions', `causes` = '$causes', `adv_symptoms` = '$adv_symptoms'  WHERE `diseases`.`name` = '$name'";
	    $result = mysqli_query($link, $query);
	    if($result){
	    	header("location:./diseases.php");
	    	
	    }else{
	    	echo 'Please check your query';
	    }

	}else{
		header("location:./diseases.php");
	}
mysqli_close($link);
?>