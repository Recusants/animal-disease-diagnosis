<?php 
include "finder.php";
include "patials/profesional_nav.php";

session_start();
if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}
?>


  <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-4 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="#" method="post">
                                   <h2>PLEASE ENTER THE APPEARING SYSMPTOMS</h2>
                                   <input type="search" name="symptom" class="form-control" placeholder="Symptom" required="">

                                   <button class="submit-btn form-control" id="form-submit">Search</button>
                                   <a href="./advanced_search.php">Advanced Search</a>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>