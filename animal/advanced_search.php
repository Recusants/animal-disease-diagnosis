<?php 
include "finder.php";
include "patials/header.php"
?>

  <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2 style="font-size: 50px;">Advanced Search</h2>
                              <form action="results.php" method="post">
                                   <h2>Fill in the form below</h2>
                                   <select id="animals" name="animal">
                                       <option value="cattle">Cattle</option>
                                       <option value="pig">Pig</option>
                                       <option value="goat">Goat</option>
                                   </select>
                                   <input type="text" name="breed" placeholder="Animal's Breed" required="">
                                   <hr>
                                   <input type="number" name="age" placeholder="Animal's age" required="" placeholder="In weeks">
                                   <input type="number" name="weight" placeholder="Animal's Weight (kgs)" required="">
                                   <input type="number" name="btemperature" placeholder="Animal's BTemp (`C)" required="">
                              
                                   <hr>
                                   <div>
                                        <input type="radio" id="sex" name="sex" value="">
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

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="#" method="post">
                                   <h2>Signup today</h2>
                                   <input type="text" name="full name" class="form-control" placeholder="Full name" required="">

                                   <input type="email" name="email" class="form-control" placeholder="Your email address" required="">

                                   <input type="password" name="password" class="form-control" placeholder="Your password" required="">

                                   <button class="submit-btn form-control" id="form-submit">Get started</button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>