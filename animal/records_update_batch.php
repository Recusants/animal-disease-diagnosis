<?php 
include "finder.php";
include "patials/profesional_nav.php";
session_start();
if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}
$name = $_GET['name'];
?>

</head>
     <section id="contact"> 
          <div class="container">
                <h2><a href="./record.php">Back</a></h2>
                <div class="row">
                    <hr>
                    <div class="col-md-12 col-sm-12">
                         <form action="./records_update_batch.php?name=<?php echo $name ?>" method="post">
                            <div class="col-md-6 col-sm-12">
                                <p>
                                    <h4 class=""><?php echo $name ?></h4>
                                </p>
                                <p>
                                    <select class="form-control" id="problem" name="problem">
                                       <option value="Sick">Sick</option>
                                       <option value="Died">Died</option>
                                   </select>
                                </p>
                                <p>
                                    <textarea class="form-control" rows="6" placeholder="Disease or symptoms" name="discription" required=""></textarea>
                                </p>
                                <p>
                                    <input class="form-control" style='color: black;' type="number" name="total_affected" required="" placeholder="How many affected?">
                                </p>
                                <p>
                                    <textarea class="form-control" rows="6" placeholder="Your response towards the issue" name="response" required=""></textarea>
                                </p>
                                <p>
                                    <input class="form-control" type="date" name="date" id="date" >
                                </p>
                                <p>
                                    <input class="form-control" name="update" type="submit" value="Update">
                                </p>
                            </div>
                        </form>
                    </div>
               </div>
          </div>
     </section>  
</html>

<?php
    $link = mysqli_connect("localhost", "root", "", "animal");
     
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    if(isset($_POST['update'])){
        $name = $_GET['name'];
        $problem = $_POST['problem'];
        $discription = $_POST['discription'];
        $total_affected = $_POST['total_affected'];
        $response = $_POST['response'];
        $date = $_POST['date'];


        $event = "<p>On " . $date . ",  " . $total_affected . " of them(got) " .  $problem . " , and we " .  $response . ". <b>Notes: " . $discription . ". <b></p>";
        

        $query = "SELECT * FROM `batch` WHERE `batch_name` = '$name'";
        $old_trace = mysqli_query($link, $query);
        $old_trace = mysqli_fetch_assoc($old_trace);
        $old_trace = $old_trace['trace'];
        

        $query = "UPDATE `batch` SET `trace` = '$old_trace, $event' WHERE `batch`.`batch_name` = '$name'";

        $result = mysqli_query($link, $query);
        if($result){?>
            <script type="text/javascript">
                alert("Event updated")
            </script>
        <?php
        }else{
            echo 'Please check your query';
        }

    }else{
        //header("location:diseases.php");
        echo "error";
    }
mysqli_close($link);
?>
