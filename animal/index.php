<!DOCTYPE html>
<html lang="en">
<head>

     <title>Known - Education HTML Template</title>
<!-- 

Known Template 

https://templatemo.com/tm-516-known

-->
<?php 
include "finder.php";
include "patials/splashscreen.php";
include "patials/header.php";

//get text from search box
$symptoms = $_POST['symptoms'];


$link = mysqli_connect("localhost", "root", "", "animal");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$result = mysqli_query($link,"SELECT * FROM diseases WHERE symptoms LIKE '%{$symptoms}%' OR adv_symptoms LIKE '%{$symptoms}%'");
?>


</head>
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2><small>Quick Symptom Search</small></h2>
                              </div>
                              <div class="col-md-12 col-sm-12">

                                   <select class="form-control" id="animals" name="animal">
                                       <option value="cattle">Cattle</option>
                                       <option value="pig">Pig</option>
                                       <option value="goat">Goat</option>
                                   </select>

                                   <input type="search" class="form-control" placeholder="Type the symptom" name="symptoms" required="">
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Search">
                              </div>
                              <div class="col-md-4 col-sm-12">
                                   <a href="./advanced_search.php"> <input class="form-control" name="send message" value="Advanced Search"></a>
                              </div>
                              <div class="col-md-4 col-sm-12">
                                   <a href="./special_help.php"> <input class="form-control" name="send message" value="Professinals">
                              </div>

                         </form>
                    </div>
                    <div class="col-md-6 col-sm-12">
                         <div class="section-title">
                              <h2><small>Possible Deases</small></h2></br>
                         </div>
                         <div class="col-md-12 col-sm-12">
                              <div style="background-color:lightcyan; border-radius: 1%; border-color: red;">
                              <?php
                                   while($row = mysqli_fetch_array($result)){
                                        echo "<p><li><a href='./dease.php' style='color: black;'>" . $row['name'] . "</br><i>" . $row['symptoms'] ."</i></a></li></p>";
                               }?>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>  
</html>
<?php
mysqli_close($link);
?>

