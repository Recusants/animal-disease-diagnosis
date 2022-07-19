<?php 
include "./scripts/config.php";
include "./finder.php";
include "./patials/profesional_nav.php";



if($_SESSION["loggedin"]!=""){
}else{
   header('location:./login.php');
}
$query = " select * from batch";
$result = mysqli_query($link, $query);


?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
} 
</style>

</head>
     <section id="contact">
          <div class="container">
               <div class="row">
                    <div style="font-size: 30px"><a href="./record.php?">Your Batches</a></div>
                    <hr>
                    <div class="col-md-12 col-sm-12">
                            <table>
                                <tr>
                                    <th>Batch Name</th>
                                    <th>Total</th>
                                    <th>Start Date</th>
                                    <th>Status</th>
                                    <th>Manage</th>
                                </tr>
                        <?php while ($row=mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td><a href='./records_update_batch.php?name=" . $row['batch_name'] . "' style='color:black;'>" . $row['batch_name']. "</a></td>";
                            echo "<td>" . $row['total'] . "</td>";
                            echo "<td>" . $row['start_date'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "<td>";
                            echo "<div class='btn-group'>";
                                echo "<a class='btn btn-primary' href='records_report_batch.php?name=" . $row['batch_name'] . "'>Report</a>";
                                echo "<a class='btn btn-warning' href='./edit_batch.php?name=" .$row['batch_name']. "'>Edit</a>";
                                echo "<a class='btn btn-danger' href='./delete_batch.php?name=" .$row['batch_name']. "'>Delete</a>";
                              echo "</div>";
                          echo "</tr>";
                            }
                        ?>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
     </section>  
</html>

<table>
                          