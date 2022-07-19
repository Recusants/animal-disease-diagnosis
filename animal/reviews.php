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
     <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Farmer Reviews <small>from around the country</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/zim/download2.JFIF" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Jackson</h4>
                                             <span>Animal Breeding Consaltent.</span>
                                        </div>
                                        <p>You really do help young creative minds to get quality education.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/zim/download1.JFIF" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Camila</h4>
                                             <span>Farm Marketing Manager</span>
                                        </div>
                                        <p>I really appriciate the effort. It was worth it.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/zim/download3.JFIF" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Barbie</h4>
                                             <span>Farm Manager</span>
                                        </div>
                                        <p>This is helpful. Thank you.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/zim/download4.JPG" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Andrio</h4>
                                             <span>Animal Farm Manager</span>
                                        </div>
                                        <p>Thanks Yollanda for the software, its realy helpful.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                         </div>

               </div>
          </div>
     </section> 

<?php include "finder.php"?>