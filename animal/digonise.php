<?php 
include "finder.php";
include "patials/header.php"
?>


  <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-4 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="#" method="post">
                                   <h2>Type the animal & symptom</h2>

                                   <select id="animals" name="animal">
                                       <option value="cattle">Cattle</option>
                                       <option value="pig">Pig</option>
                                       <option value="goat">Goat</option>
                                   </select>

                                   <input type="search" name="symptom" class="form-control" placeholder="Symptom" required="">

                                   <button class="submit-btn form-control" id="form-submit">Search</button>
                                   <a href="./advanced_search.php">Advanced Search</a>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>