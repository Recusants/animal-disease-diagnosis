<?php 
include "finder.php";
include "patials/profesional_nav.php";
session_start();
if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}
?>


   <section id="feature">
          <div class="container">
               <div class="row">
                    <a href="records_add_batch.php">
                         <div class="col-md-6 col-sm-4">
                              <div class="feature-thumb">
                                   <span>A.B</span>
                                   <h3>Add New Batch</h3>
                                   <p>Click here and fill in the comming form to add a new batch in the system.</p>
                              </div>
                         </div>
                    </a>
                    <a href="records_list_batch.php">
                         <div class="col-md-6 col-sm-4">
                              <div class="feature-thumb">
                                   <span>U.R</span>
                                   <h3>Update Records</h3>
                                   <p>Here you can update records about a spacific batch.</p>
                              </div>
                         </div>
                    </a>
               </div>
          </div>
     </section>