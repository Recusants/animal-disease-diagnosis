<?php 
require_once "scripts/config.php";
include "finder.php";
include "patials/header.php";


if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}
?>

  <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">
                    <div class="col-md-2 col-sm-12">
                    </div>
                    <div class="col-md-8 col-sm-12">
                         <div class="about-info">
                              <?php
                                   if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        if($_POST['breed']!=""){  
                                             $breed = $_POST['breed'];
                                             $age = $_POST['age'];
                                             $weight = $_POST['weight'];
                                             $btemperature = $_POST['btemperature'];
                                             $sex = $_POST['sex'];
                                             $data_stoo = "Stoos=" . $stoo = $_POST['stoo'];
                                             $data_urine = "Urine=" . $urine = $_POST['urine'];
                                             $data_foodc = "Foodc=" . $foodc = $_POST['foodc'];
                                             $data_waterc = "Waterc=" . $waterc = $_POST['waterc'];
                                             $data_activeness = "Activeness=" . $activeness = $_POST['activeness'];

                                             $link = mysqli_connect("localhost", "root", "", "animal");
 
                                             // Check connection
                                             if($link === false){
                                                 die("ERROR: Could not connect. " . mysqli_connect_error());
                                             }
     $result = mysqli_query($link,"SELECT * FROM `diseases` WHERE((`adv_symptoms` LIKE '%$data_stoo%' OR `adv_symptoms` LIKE  'Not Sure') AND
                                                                 (`adv_symptoms` LIKE '%$data_urine%' OR `adv_symptoms` LIKE 'Not Sure') AND
                                                                 (`adv_symptoms` LIKE '%$data_foodc%' OR `adv_symptoms` LIKE 'Not Sure') AND
                                                                 (`adv_symptoms` LIKE '%$data_waterc%' OR `adv_symptoms` LIKE 'Not Sure') AND
                                                                 (`adv_symptoms` LIKE '%$data_activeness%' OR `adv_symptoms` LIKE 'Not Sure')
                                                                      )
                                                                 ");
                                             

                                   echo "<h2>Here is what we think may be affecting your cattle, bassed on the information you provided.</h2>";
                                   echo "<hr>";
                                   echo '<button onclick="window.print()">CREATE PDF</button> AND MAIL IT TO YOUR NEAREST VETINARY';
                                   echo "<hr>";
                                   echo "<span><i class='fa fa-animal'></i></span>";
                                   echo "<figcaption>";
                                        echo "<h3>Animal Details</h3>";
                                        echo "<p>Breed:" . $breed . "</br>Sex:" . $sex . "</br>Age:" . $age . "weeks old";
                                        echo "</p>";
                                   echo "</figcaption>";
                                   echo "<hr>";
                                   echo "<span><i class='fa fa-bar-chart-o'></i></span>";
                                   echo "<figcaption>";
                                        echo "<h3>Symptoms</h3>";
                                        echo "<p>" . $activeness . " activity </br>" . $waterc . " water consuption</br>" . $foodc . " food consuption</br>" . $urine . " urine</br>" . $stoo . " stoos </br>";
                                   echo "</figcaption>";
                                   echo "<hr>";
                                   echo "<span><i class='fa fa-bar-chart-o'></i></span>";
                                   echo "<figcaption>";
                                        echo "<h3>Possible Desease</h3><p>";
                                        if($result != ''){
                                             while($row = mysqli_fetch_array($result)){
                                                  echo 'Data found:<br>';
                                                  echo "<a href='./disease.php?name=" . $row['name'] . "' style='color:black;'>" . $row['name']. ",</a>";
                                             }
                                        }else{
                                             echo "Sorry we did not find any disease matching the given Symptoms<br> You can <a href='./advanced_search.php'> try again </a> or <a href='./index.php'>use genaral search </a>.";
                                        }
                                   echo "</p> </figcaption>";
                                   echo "<hr>";
                                   
                                   }
                              }else{
                                   echo "<h2>You did not provide any information. <a href='./advanced_search.php'> Click here to do that</a>.</h2>";
                              }
                              ?>
                              
                         </div>
                    </div>

               </div>
          </div>
     </section>