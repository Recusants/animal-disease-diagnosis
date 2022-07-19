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
               <div class="row" style="background-color:lavender;">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2 style="font-size: 50px;">Advanced Search</h2>
                              <form action="results.php" method="post">
                                   <h2>Fill in the form below</h2>
                                   <input type="text" name="breed" placeholder="Animal's Breed" required="">
                                   <hr>
                                   <input type="number" name="age" placeholder="Animal's age in weeks" required="">
                                   <input type="number" name="weight" placeholder="Animal's Weight (kgs)" required="">
                                   <input type="number" name="btemperature" placeholder="Animal's BTemp (`C)" required="">
                              
                                   <hr>
                                   <div>
                                        <input type="radio" id="sex" name="sex" value="Male">
                                        <label for="sex">Male</label>
                                        <input type="radio" id="sex" name="sex" value="Female">
                                        <label for="sex">Female</label><br>
                                   </div>
                                   <hr>
                                   Stoo<br>
                                   <div>
                                        <input type="radio" id="stoo" name="stoo" value="Normal">
                                        <label for="stoo">Normal</label>
                                        <input type="radio" id="stoo" name="stoo" value="Watery">
                                        <label for="stoo">Watery</label>
                                        <input type="radio" id="stoo" name="stoo" value="Bloody">
                                        <label for="stoo">Bloody</label>
                                        <input type="radio" id="stoo" name="stoo" value="Not Sure">
                                        <label for="stoo">Not Sure</label>
                                   </div>
                                   <hr>
                                   
                             
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                    </br></br></br></br>
                              Urine<br>
                                   <div>
                                        <input type="radio" id="urine" name="urine" value="Normal">
                                        <label for="urine">Normal</label>
                                        <input type="radio" id="urine" name="urine" value="Amonic">
                                        <label for="urine">Amonic</label>
                                        <input type="radio" id="urine" name="urine" value="Bloody">
                                        <label for="urine">Bloody</label>
                                        <input type="radio" id="urine" name="urine" value="Not Sure">
                                        <label for="urine">Not Sure</label>
                                   </div>

                                   <hr>
                                   Food Consuption<br>
                                   <div>
                                        <input type="radio" id="foodc" name="foodc" value="Low">
                                        <label for="foodc">Low</label>
                                        <input type="radio" id="foodc" name="foodc" value="Normal">
                                        <label for="foodc">Normal</label>
                                        <input type="radio" id="foodc" name="foodc" value="High">
                                        <label for="foodc">High</label>
                                        <input type="radio" id="foodc" name="foodc" value="Not Sure">
                                        <label for="foodc">Not Sure</label>
                                   </div>
                                   <hr>
                                   Water Consuption<br>
                                   <div>
                                        <input type="radio" id="waterc" name="waterc" value="Low">
                                        <label for="waterc">Low</label>
                                        <input type="radio" id="waterc" name="waterc" value="Normal">
                                        <label for="waterc">Normal</label>
                                        <input type="radio" id="waterc" name="waterc" value="High">
                                        <label for="waterc">High</label>
                                        <input type="radio" id="waterc" name="waterc" value="Not Sure">
                                        <label for="waterc">Not Sure</label>
                                   </div>
                                   <hr>
                                   Activeness<br>
                                   <div>
                                        <input type="radio" id="activeness" name="activeness" value="Low">
                                        <label for="activeness">Low</label>
                                        <input type="radio" id="activeness" name="activeness" value="Normal">
                                        <label for="activeness">Normal</label>
                                        <input type="radio" id="activeness" name="activeness" value="High">
                                        <label for="activeness">High</label>
                                        <input type="radio" id="activeness" name="activeness" value="Not Sure">
                                        <label for="activeness">Not Sure</label>
                                   </div>



                                   <button class="submit-btn form-control" id="form-submit">Proced</button>
                              </form>
                        
                    </div>

               </div>
          </div>
     </section>