<style type="text/css">
#logo {
  display: inline-block;
  margin: 15px; /* margin: 20px was off */
  float: left;
  height: 60px;
  width: auto; /* correct proportions to specified height */
  border-radius: 50%; /* makes it a circle */
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
                    <a href="./login.php" class="navbar-brand"><a href="./"><img id="logo" src="images/zim/logo0.PNG"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="./about.php" class="smoothScroll">About</a></li>
                         <li><a href="./advanced_search.php" class="smoothScroll">Advanced Dignosise</a></li>
                         <li><a href="./learning.php" class="smoothScroll">Learning</a></li>
                         <li><a href="./reviews.php" class="smoothScroll">Reviews</a></li>
                         <li><a href="./special_help.php" class="smoothScroll">Special Help</a></li>';
                         
                         if ($user_type === "Professional Farmer"){
                              echo'
                              <li><a href="./diseases.php" class="smoothScroll">Professionals Parnel</a></li>';
                         }
                         echo'<li><a href="./logout.php" class="smoothScroll">Logout</a></li>';
                         echo'
                         
                    </ul>
               </div>

          </div>
     </section>';
}
?>

