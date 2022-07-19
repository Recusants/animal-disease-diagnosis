<?php 
include "./finder.php";
include "./patials/profesional_nav.php";
session_start();
if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}

?>

<section id="about">
     <div class="container" id="divToPrint">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                     <div class="about-info">
                         <?php
                              $link = mysqli_connect("localhost", "root", "", "animal");
                              // Check connection
                              if (mysqli_connect_errno())
                              {
                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                              }
                              $result = mysqli_query($link,"SELECT * FROM batch WHERE batch_name = '".$_GET['name']."' ORDER BY `batch_name` DESC");
                              $batch = mysqli_fetch_assoc($result);
                                
                              

                         echo "<h2>Batch Name: " . $batch['batch_name'] . "</h2>";

                         echo "<figure>";
                              echo "<figcaption>";
                                   echo "<h3>Starting No: " . $batch['total'] . "</h3>";
                                   echo "<h3>Arrival Date: " . $batch['start_date'] . "</h3>";
                                   echo "<h3>Batch Description</h3>";
                                   echo "<p>" . $batch['discription'] . "</p>";
                              echo "</figcaption>";
                         echo "</figure>";
                         echo "<figure>";
                              echo "<figcaption>";
                                   echo "<h3> EVENTS:::::::::: </h3>";
                                   echo "<p>" . $batch['trace'] . "</p>"; ?>
                              </figcaption>
                         </figure>
                              <hr>
                              <div>
                                   <input type="button" value="print" onclick="PrintDiv();" />
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', 'width=90%');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
     popupWin.document.close();
            }
 </script>


