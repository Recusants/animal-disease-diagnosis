<?php 
include "./finder.php";
include "./patials/profesional_nav.php";

include "./scripts/config.php";
if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}
$name = $_GET['name'];
$query = " select * from batch where batch_name ='" .$name."'";
$result = mysqli_query($link, $query);

while ($row=mysqli_fetch_assoc($result)) {
    $batch_name = $row['batch_name'];
    $total = $row['total'];
    $discription = $row['discription'];
    $start_date = $row['start_date'];
    $status = $row['status'];
    $trace = $row['trace'];
}
?>

</head>
     <section id="contact">
          <div class="container">
               <div class="row">
                    <div style="font-size: 30px"><a href="../professionals.php?">List all documented diseases</a></div>
                    <hr>
                    <div class="col-md-12 col-sm-12">
                         <form action="./update_batch.php" method="post">
                            <div class="col-md-6 col-sm-12">
                                <p>
                                    <label for="breed">Batch Name:</label>
                                    <input class="form-control" type="text" name="batch_name" id="batch_name" value="<?php echo $batch_name ?>">
                                </p>
                                <p>
                                    <label for="total">Total number:</label>
                                    <input style='color: black;' type="number" name="total" value="<?php echo $total ?>">
                                </p>
                                <p>
                                    <label for="discription">Discription:</label>
                                    <textarea class="form-control" rows="6" placeholder="Few notes to remember this batch" name="discription" required="" value="<?php echo $discription ?>"></textarea>
                                </p>
                                <p>
                                    <input class="form-control"  type="submit" value="Update">
                                </p>
                            </div>
                        </form>
                    </div>
               </div>
          </div>
     </section>  
</html>
