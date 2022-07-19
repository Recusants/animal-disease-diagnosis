<?php 

include "finder.php";
include "patials/profesional_nav.php";
session_start();
if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}
?>

</head>
     <section id="contact">
          <div class="container">
               <div class="row">
                    <div style="font-size: 30px">
                        Add a cattle disease
                    </div>
                    <hr>
                    <div class="col-md-12 col-sm-12">
                         <form action="add_disease.php" method="post">
                            <div class="col-md-6 col-sm-12">
                                <p>
                                    <label for="firstName">Disease Name:</label>
                                    <input class="form-control" type="text" name="name" id="name" required="">
                                </p>
                                <p>
                                    <label for="mtime">Time to manifest:</label>
                                    <input class="form-control" type="text" name="mtime" id="mtime" >
                                </p>
                                <p>
                                    <label for="symptoms">Symptoms:</label>
                                    <input class="form-control" type="text" name="symptoms" id="symptoms" required="">
                                </p>
                                <p>
                                    <label for="treatment">Treatment:</label>
                                    <input class="form-control" type="text" name="treatment" id="treatment">
                                </p>
                                <p>
                                    <label for="transmission">How its transmited:</label>
                                    <input class="form-control" type="text" name="transmission" id="transmission">
                                </p>
                                <p>
                                    <label for="suggestions">Any suggestions:</label>
                                    <input class="form-control" type="text" name="suggestions" id="suggestions" required="">
                                </p>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <p>
                                    <label for="causes">Causes:</label>
                                    <input class="form-control" type="text" name="causes" id="causes">
                                </p>
                                <p>
                                    <label for="adv_symptom">Advanced Symptom:</label>
                                </p>
                                <p>
                                    Stoo<br>
                                   <div>
                                        <input type="radio" id="stoo" name="stoo" value="Normal">
                                        <label for="stoo">Normal</label>
                                        <input type="radio" id="stoo" name="stoo" value="Watery">
                                        <label for="stoo">Watery</label>
                                        <input type="radio" id="stoo" name="stoo" value="Bloody">
                                        <label for="stoo">Bloody</label>
                                   </div>
                                </p>
                                <p>
                                   Urine<br>
                                   <div>
                                        <input type="radio" id="urine" name="urine" value="Normal">
                                        <label for="urine">Normal</label>
                                        <input type="radio" id="urine" name="urine" value="Amonic">
                                        <label for="urine">Amonic</label>
                                        <input type="radio" id="urine" name="urine" value="Bloody">
                                        <label for="urine">Bloody</label>
                                   </div>
                                </p>
                                <p>
                                   Food Consuption<br>
                                   <div>
                                        <input type="radio" id="foodc" name="foodc" value="Low">
                                        <label for="foodc">Low</label>
                                        <input type="radio" id="foodc" name="foodc" value="Normal">
                                        <label for="foodc">Normal</label>
                                        <input type="radio" id="foodc" name="foodc" value="High">
                                        <label for="foodc">High</label>
                                   </div>
                                </p>
                                <p>
                                   Water Consuption<br>
                                   <div>
                                        <input type="radio" id="waterc" name="waterc" value="Low">
                                        <label for="waterc">Low</label>
                                        <input type="radio" id="waterc" name="waterc" value="Normal">
                                        <label for="waterc">Normal</label>
                                        <input type="radio" id="waterc" name="waterc" value="High">
                                        <label for="waterc">High</label>
                                   </div>
                                </p>
                                <p>
                                   Activeness<br>
                                   <div>
                                        <input type="radio" id="activeness" name="activeness" value="Low">
                                        <label for="activeness">Low</label>
                                        <input type="radio" id="activeness" name="activeness" value="Normal">
                                        <label for="activeness">Normal</label>
                                        <input type="radio" id="activeness" name="activeness" value="High">
                                        <label for="activeness">High</label>
                                   </div>
                                </p>
                                <p>
                                    <input class="form-control"  type="submit" value="Submit">
                                </p>
                            </div>
                        </form>
                    </div>
               </div>
          </div>
     </section>  
</html>




<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "animal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Escape user inputs for security
    if($_POST['name']!=""){
        $name = $_POST['name'];
        $mtime = $_POST['mtime'];
        $symptoms = $_POST['symptoms'];
        $treatment = $_POST['treatment'];
        $transmission = $_POST['transmission'];
        $suggestions = $_POST['suggestions'];
        $causes = $_POST['causes'];
        

        //advanced symptoms
        $data_stoo = "Stoos=" . $stoo = $_POST['stoo'];
        $data_urine = "Urine=" . $urine = $_POST['urine'];
        $data_foodc = "Foodc=" . $foodc = $_POST['foodc'];
        $data_waterc = "Waterc=" . $waterc = $_POST['waterc'];
        $data_activeness = "Activeness=" . $activeness = $_POST['activeness'];




        $adv_symptoms = $data_stoo . " " . $data_urine . " " . $data_foodc . " " . $data_waterc . " " . $data_activeness;




        // Attempt insert query execution
        $sql = "INSERT INTO diseases (name,  mtime, symptoms, treatment, transmission, suggestions, causes, adv_symptoms) VALUES ('$name', '$mtime', '$symptoms', '$treatment', '$transmission', '$suggestions', '$causes', '$adv_symptoms')";
        if(mysqli_query($link, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
}
     
// Close connection
mysqli_close($link);
?>

