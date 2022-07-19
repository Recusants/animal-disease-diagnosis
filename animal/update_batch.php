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
		$batch_name = $_GET['batch_name'];
	    $total = $_POST['total'];
	    $discription = $_POST['discription'];
	    $start_date = $_POST['start_date'];
	    $trace = $_POST['trace'];

	    
	    $query = "UPDATE `diseases` SET `total` = '$discription', `start_date` = '$trace'";
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