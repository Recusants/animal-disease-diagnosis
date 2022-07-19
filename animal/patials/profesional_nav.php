<style type="text/css">
#logo {
  display: inline-block;
  margin: 15px; /* margin: 20px was off */
  float: left;
  height: 60px;
  width: auto; /* correct proportions to specified height */
  border-radius: 50%; /* makes it a circle */
}
.navbar {
     background-color: grey;
}
.z{
     font-size: 30px;
     color: blue;
     font-weight: bolder;
     font-family: fantasy;
}
</style>

<?php
//date("Y-m-d")
if((date("Y-m-d"))>("2021-11-30")){ 
     echo '<!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">
               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <div class="z"><a href="./login.php">PROFESSINAL PARNEL</a></div>

               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="./" class="smoothScroll">Home</a></li>
                         <li><a href="./diseases.php" class="smoothScroll">Diseases</a></li>
                         <li><a href="./add_disease.php" class="smoothScroll">Add Diseases</a></li>
                         <li><a href="./record.php" class="smoothScroll">Batch Manegement</a></li>
                         <li><a href="./register.php" class="smoothScroll">Add Contributors</a></li>
                         <li><a href="./logout.php" class="smoothScroll">Logout</a></li>
                    </ul>
               </div>
          </div>
     </section>';
}
?>