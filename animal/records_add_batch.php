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
                <h2>Add new batch</h2>
                <div class="row">
                    <hr>
                    <div class="col-md-12 col-sm-12">
                         <form action="records_add_batch.php" method="post">
                            <div class="col-md-6 col-sm-12">
                                <p>
                                    <label for="breed">Batch Name:</label>
                                    <input class="form-control" type="text" name="batch_name" id="batch_name" >
                                </p>
                                <p>
                                    <label for="total">Total number:</label>
                                    <input style='color: black;' type="number" name="total">
                                </p>
                                <p>
                                    <label for="breed">Breed:</label>
                                    <input class="form-control" type="text" name="breed" id="breed" >
                                </p>
                                <p>
                                    <label for="discription">Discription:</label>
                                    <textarea class="form-control" rows="6" placeholder="Few notes to remember this batch" name="discription" required=""></textarea>
                                </p>
                                <p>
                                    <input class="form-control"  type="submit" value="Add">
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
    if($_POST['batch_name']!=""){
        $batch_name = $_POST['batch_name'];
        $animal = $_POST['animal'];
        $total = $_POST['total'];
        $discription = $_POST['discription'];



        // Attempt insert query execution
        $sql = "INSERT INTO `batch` (`batchId`, `batch_name`, `total`, `discription`, `start_date`, `status`) VALUES (NULL, '$batch_name', '$total', 'discription', CURRENT_TIMESTAMP, '1')";
        if(mysqli_query($link, $sql)){?>
            <script type="text/javascript">
            alert("Records added successfully.")
            </script>
            <?php
        } else{
            echo "ERROR: Could not be able to execute $sql. " . mysqli_error($link);
        }
    }
}
     
// Close connection
mysqli_close($link);
?>

