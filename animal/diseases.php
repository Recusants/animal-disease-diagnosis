<?php 
include "finder.php";
include "patials/profesional_nav.php";
session_start();
if($_SESSION["id"]!=""){

}else{
   header('location:./login.php');
}
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
                    <div class="col-md-12 col-sm-12" >
                        <table>
                          <tr>
                            <th>Disease name</th>
                            <th>Symptoms</th>
                            <th>Treatment</th>
                            <th>Causes</th>
                            <th>Manage</th>
                          </tr><?php
                          while($row = mysqli_fetch_array($result))
                          {
                          echo "<tr>";
                            echo "<td><a href='./disease.php?name=" . $row['name'] . "' style='color:black;'>" . $row['name']. "</a></td>";
                            echo "<td>" . $row['symptoms'] . "</td>";
                            echo "<td>" . $row['treatment'] . "</td>";
                            echo "<td>" . $row['causes'] . "</td>";
                            echo "<td>";
                            echo "<div class='btn-group'>";
                                echo "<a class='btn btn-warning' href='./edit.php?name=" .$row['name']. "'>Edit</a>";
                                echo "<a class='btn btn-danger' href='./delete.php?name=" .$row['name']. "'>Dele</a>";
                              echo "</div>";
                          echo "</tr>";
                          }?>
                        </table>
                    </div>
               </div>
          </div>
     </section>  
</html>
<?php
mysqli_close($link);
?>