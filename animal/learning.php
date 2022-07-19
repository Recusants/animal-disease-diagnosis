<?php 
require_once "scripts/config.php";
include "finder.php";
include "patials/header.php";


if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}
?>


</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- Courses -->
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Popular Courses <small>Upgrade your skills with newest courses</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-courses">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/zim/animal_health.png" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 7 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Introduction To Animal health</a></h3>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/zim/black_same.jfif" class="img-responsive" alt="">
                                                       <span>Mark Wilson</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>USD 25</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/zim/download3.jfif" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 20 / 7 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 4.5 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Fantamentals For Egg Farming</a></h3>
                                                  <p>I will tearch you all you need to know about layers.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/zim/black_jesica.jfif" class="img-responsive" alt="">
                                                       <span>Jessica</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>USD 80</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/zim/cattle_marketing.jfif" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 15 / 8 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 6 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#"> Agricalture Marketing Communication</a></h3>
                                                  <p>Creating networks in farmming industry.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <span>Catherine</span>
                                                  </div>
                                                  <div class="courses-price free">
                                                       <a href="#"><span>Free</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/zim/download5.JFIF" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 10 / 8 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 8 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Lets talk about chichen farm</a></h3>
                                                  <p>All you need to know to build a succesefull chicken business.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <span>Mark Wilson</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>USD 45</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/zim/download5.JFIF" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 5 / 10 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 10 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Business Management & Economics</a></h3>
                                                  <p>Viewing farming from a business perspective.</p>
                                             </div>


                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/zim/black_jesica.jfif" class="img-responsive" alt="">
                                                       <span>Jessica</span>
                                                  </div>
                                                  <div class="courses-price free">
                                                       <a href="#"><span>Free</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                         </div>

               </div>
          </div>
     </section>

     <?php include "finder.php"?>

</body>
</html>