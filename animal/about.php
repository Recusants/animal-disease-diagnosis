<?php 
require_once "scripts/config.php";
include "finder.php";
include "patials/header.php";

if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}
?>


   <section id="feature">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>IA</span>
                              <h3>Intelligent App</h3>
                              <p>Our software help small, midium and large scale animal farmers in deases dignosis. The suggestions provided are based on the information you provide and are matched to professinally gathered data in our system.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>L</span>
                              <h3>Learning</h3>
                              <p>We provide you with cheap and free couses to inhance your skills. You can also talk to our proffesinal representatives in <a href="./special_help.php"> special help</a> </p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>Dev</span>
                              <h3>Developers</h3>
                              <p>This software was developed and its being maintained by <a href="https://github.com//recusants">Tinashe Mphisa</a>. For any technical problems contact me on <b><a href="tel:+263784851863">+263784851863</a></b>. I personaly appriciate that youre using my product</p>
                         </div>
                    </div>

               </div>
          </div>
     </section>