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

	if(isset($_GET['name'])){
		$name = $_GET['name'];
	    $query = "DELETE FROM `diseases` WHERE `diseases`.`name` = '$name'";
	    $result = mysqli_query($link, $query);
	    if($result){
	    	header("location:./diseases.php");

	    	
	    }else{
	    	echo 'Please check your query';
	    }

	}else{
		echo "Unable to delete";
		
	}
mysqli_close($link);
?>