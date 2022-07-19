<!DOCTYPE html>
<html lang="en">
<head>

     <title>Wise Owl Smart Farming</title>

<?php 
require_once "scripts/config.php";
include "finder.php";
include "patials/splashscreen.php";
include "patials/header.php";


if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}

//get text from search box
?>


</head>
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="./index.php" method="POST">
                              <div class="section-title">
                                   <h2><small>Quick Symptom Search</small></h2>
                                   <h4>Please enter the symptoms appearing to your cattle</h4>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="search" class="form-control" placeholder="Type the symptom" name="symptoms" required="">
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Search">
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <a href="./advanced_search.php"> <input class="form-control" name="send message" value="Advanced Search"></a>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <a href="./special_help.php"> <input class="form-control" name="send message" value="Professinals"></a>
                              </div>

                         </form>
                    </div>
                    <div class="col-md-6 col-sm-12">
                         <div class="section-title">
                              <h2><small>Possible Diseases</small></h2></br>
                         </div>
                         <div class="col-md-12 col-sm-12">
                              <div style="background-color:blue; height: 300px; background-color:darkgrey; border-radius: 1.5%; overflow-y: scroll;">
                              <?php
                                   
                              $result = '';

     
                              if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                   if($_POST['symptoms']!=""){
                                        $symptoms = $_POST['symptoms'];

                                        $link = mysqli_connect("localhost", "root", "", "animal");
                                        // Check connection
                                        if (mysqli_connect_errno()){

                                             echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                        }else{

                                             $result = mysqli_query($link,"SELECT * FROM `diseases` WHERE `diseases`.`symptoms` LIKE '%$symptoms%'");
                                             
                                             if($result != ''){
                                                  while($row = mysqli_fetch_array($result)){
                                                       
                                                       echo "<p><li><a href='./disease.php?name=" . $row['name'] . "' style='color:black;'>" . $row['name']. "</br><i>" . $row['symptoms'] . "</i></a></li></p>";
                                                  }
                                             }else{
                                                  echo "You search did not match any disease. You can try <a href='./advanced_search.php'> advanced search.</a";
                                             }
                                             mysqli_close($link);
                                        }
                                   }
                              }else{
                                   echo "You search results will appeare here.";
                              }
                              ?> 

                               
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>  
</html>

