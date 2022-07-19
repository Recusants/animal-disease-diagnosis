<?php 
require_once "scripts/config.php";
include "finder.php";
include "patials/header.php";


if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}
?>

     <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Animal Husbandry Professinals<small>Meet Professional Trainers</small></h2>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/zim/lct1.JFIF" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Rhoen Fox</h3>
                                   <span>I love Teaching</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/zim/lct2.JFIF" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Catherine Ngwena</h3>
                                   <span>Education is the key!</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-google"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/zim/lct1.JFIF" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Rhoen Fox</h3>
                                   <span>I like Online Courses</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   <li><a href="#" class="fa fa-linkedin"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/zim/black_jesica.jfif" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Jesica</h3>
                                   <span>Lets talk about animals</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-google"></a></li>
                                   <li><a href="#" class="fa fa-behance"></a></li>
                              </ul>
                         </div>
                    </div>

               </div>
          </div>
     </section>
<?php include "finder.php" ?>