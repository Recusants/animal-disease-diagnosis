<?php 
include "finder.php";
include "./scripts/config.php";
include "patials/header.php";



//session_start();
if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}
?>

  <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row"><h2>Disease Details</h2><hr>

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info"> 
                              <?php
                                   if($_GET['name']!=""){
                                        $name = $_GET['name'];
                                        // Check connection
                                        if($link === false){
                                            die("ERROR: Could not connect. " . mysqli_connect_error());
                                        }else{
                                             $result = mysqli_query($link,"SELECT * FROM `diseases` WHERE `name` = '" .$name. "' ");
                                             while($row = mysqli_fetch_array($result)){
                                                  echo "<figcaption>";
                                                  echo '<div class="col-md-offset-1 col-md-4 col-sm-12">';
                                                  
                                                  echo "<p><h2>NAME:</h3>" . $row['name'] . "</br><h3>SYMPTOMS:</h3></br>" . $row['symptoms'] . "</br><h3>TREATMENT:</h3></br>" . $row['treatment'] ;
                                                  echo "</p>";
                                                  echo '</div>';
                                                  echo "</figcaption>";


                                                  echo "</div>";
                                                  echo "</div>";
                                                  echo "<figcaption>";
                                                  echo '<div class="col-md-offset-1 col-md-4 col-sm-12">';
                                                            echo"</br><h3>TRANSMISSION METHOD:</h3></br>" . $row['transmission'] . "</br><h3>SUGGESTIONS:</h3></br>" . $row['suggestions'];
                                                  echo "</div>";
                                                  echo "</figcaption>";

                                                  echo "<figcaption>";
                                                  echo '<div class="col-md-offset-1 col-md-4 col-sm-12">';
                                                       echo "</br><h3>CAUSES:</h3></br>" . $row['causes'] . "</br><h3>ADVANCED SYMPTOMS:</h3></br>" . $row['adv_symptoms'];
                                                  echo "</div>";
                                                  echo "</figcaption>";
                                                  $result = Null;




                                             }
                                        }
                                   
                                   }else{
                                        echo "<h2>You did not provide any disease. <a href='./diseases.php'> Click here to do that</a>.</h2>";
                                   }

                              ?>
                              
                      

               </div>
          </div>
     </section>

<?php
include "patials/footer.php";
?>