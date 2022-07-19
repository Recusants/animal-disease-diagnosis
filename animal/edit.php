
<?php 
include($_SERVER['DOCUMENT_ROOT']."/animal/finder.php");
include($_SERVER['DOCUMENT_ROOT']."/animal/patials/profesional_nav.php");

include "./scripts/config.php";

if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}
$dzname = $_GET['name'];
$query = " select * from diseases where name ='" .$dzname."'";
$result = mysqli_query($link, $query);

while ($row=mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $mtime = $row['mtime'];
    $symptoms = $row['symptoms'];
    $treatment = $row['treatment'];
    $transmission = $row['transmission'];
    $suggestions = $row['suggestions'];
    $causes = $row['causes'];
    $adv_symptoms = $row['adv_symptoms']; 
}
?>

</head>
     <section id="contact">
          <div class="container">
               <div class="row">
                    <div style="font-size: 30px"><a href="./professionals.php?">List all documented diseases</a></div>
                    <hr>
                    <div class="col-md-12 col-sm-12">
                         <form action="./update.php?name=<?php echo $name ?>" method="post">
                            <div class="col-md-6 col-sm-12">
                                <p>
                                    <label for="firstName">Disease Name:</label>
                                    <input class="form-control" type="text" name="name" id="name" required="" value="<?php echo $name ?>">
                                </p>
                                <p>
                                    <label for="mtime">Time to manifest:</label>
                                    <input class="form-control" type="text" name="mtime" id="mtime" value="<?php echo $mtime ?>">
                                </p>
                                <p>
                                    <label for="symptoms">Symptoms:</label>
                                    <input class="form-control" type="text" name="symptoms" id="symptoms" required="" value="<?php echo $symptoms ?>">
                                </p>
                                <p>
                                    <label for="treatment">Treatment:</label>
                                    <input class="form-control" type="text" name="treatment" id="treatment" value="<?php echo $treatment ?>">
                                </p>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <p>
                                    <label for="transmission">How its transmited:</label>
                                    <input class="form-control" type="text" name="transmission" id="transmission" value="<?php echo $transmission ?>">
                                </p>
                                <p>
                                    <label for="suggestions">Any suggestions:</label>
                                    <input class="form-control" type="text" name="suggestions" id="suggestions" required="" value="<?php echo $suggestions ?>">
                                </p>
                                <p>
                                    <label for="causes">Causes:</label>
                                    <input class="form-control" type="text" name="causes" id="causes" value="<?php echo $causes ?>">
                                </p>
                                <p>
                                    <label for="adv_symptom">Advanced Symptom:</label>
                                    <input class="form-control" type="text" name="adv_symptoms" id="adv_symptom" placeholder="Ex Activeness=Low" value="<?php echo $adv_symptoms ?>">
                                </p>
                                <p>
                                    <hr>
                                    <input class="form-control" name="update" type="submit" value="Update">
                                </p>
                            </div>
                        </form>
                    </div>
               </div>
          </div>
     </section>  
</html>
