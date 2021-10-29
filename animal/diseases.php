<?php 
include "finder.php";
include "patials/header.php";
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
<?php
$link = mysqli_connect("localhost", "root", "", "animal");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($link,"SELECT * FROM diseases");
?>
</head>
     <section id="contact">;
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h2><a href="./professionals.php">Click here to Add</a></h2>
                        <table>
                          <tr>
                            <th>Disease name</th>
                            <th>Animals</th>
                            <th>Time to manifest</th>
                            <th>Symptoms</th>
                            <th>Treatment</th>
                            <th>Transmission Mthd</th>
                            <th>Suggestions</th>
                            <th>Causes</th>
                            <th>Advanced Symptoms</th>
                          </tr><?php
                          while($row = mysqli_fetch_array($result))
                          {
                          echo "<tr>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['animals'] . "</td>";
                            echo "<td>" . $row['mtime'] . "</td>";
                            echo "<td>" . $row['symptoms'] . "</td>";
                            echo "<td>" . $row['treatment'] . "</td>";
                            echo "<td>" . $row['transmission'] . "</td>";
                            echo "<td>" . $row['suggestions'] . "</td>";
                            echo "<td>" . $row['causes'] . "</td>";
                            echo "<td>" . $row['adv_symptoms'] . "</td>";
                          echo "</tr>";
                          }?>
                    </div>
               </div>
          </div>
     </section>  
</html>
<?php
mysqli_close($link);
?>
