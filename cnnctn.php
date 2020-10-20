<?php
$conn = mysqli_connect("localhost", "root", "", "Nidhi");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Name, AboutMe, Email, Linkedin FROM n1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
//while($row = $result->fetch_assoc()) {
//echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["AboutMe"] . "</td><td>". $row["Email"]. "</td></tr>"  . $row["Linkedin"]. "</td></tr>";
//}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact</title>
<style>
  
  pre{
    font-family: 'Helvetica Neue';
    font-size: 10px;
    font: bold;
  }

  body{
    background-color: #fff;
    }

    span{
      text-align: right;
      font-size: 30px;
      color:#008EE2;
      font: bold;
      margin: 40px;
      font:bold;
      
      
    }
    .city {
      color: #008EE2;
      margin-top: 0px;
      padding: 25px;
      margin-left: none;
      
      top: 70px;
      
      
    }

    .man{
      color: rgb(88, 87, 87);
      top: 20px;
      align-items: center;
      padding: 10px;
      font-size: 22px;
    }
      

    .column1 {
    float: left;
    width: 18%;
    padding: 5px;
    height: 300px;
    margin-top: none;
    }

    .column2 {
    float:left;
    width: 60%;
    padding:0px;
    height: 300px;
    
    }

    .column3 {
    float: left;
    width: 18%;
    padding: 5px;
    height: 300px;
    margin-right: none;
    }

    .row:after{
    content: "";
    display: table;
    clear: both;
    }

    tr:hover{
       background-color: darkgrey;
       }

    td{
       height: 50px;
       width: 200px;
      }
  
      



  
</style>

</head>
<body>


  <span>Anonymous<hr></span>
    
<div class="row">
  <div class="column1" style="background-color:transparent">
    
    <div class="city">
      <table rules="rows">
        <tr>
          <td style="color: rgb(88, 87, 87);">Nidhi Yadav:Indira Gandhi Delhi Technical University For Women</td>
        </tr>
        <tr>
         <td><a style="text-decoration: none; font-size: larger;color: #008EE2;" href="home.html">About Nidhi</a></td>
        </tr>  
        <tr>
         <td><a style="text-decoration: none; font-size: larger;color: #008EE2;" href="pleadership.html">Personal Leadership Statement</a></td>
        </tr>
        <tr>
         <td><a style="text-decoration: none; font-size: larger;color: #008EE2;" href="project.html">Projects Accomplished</a></td>
        </tr>
        <tr>
         <td><a style="text-decoration: none; font-size: larger;color: #008EE2;" href="contact.html">Contact Me</a></td>
        </tr>
     </table>
  </div>
</div>
     
 
<div class="row">   
  <div class="column2" style="background-color:transparent;">
  
    <div class="man">
      <table1>
        <tr1>
          <td style="font-family:'Helvetica Neue'; font-size: 80px; align-items: center;"></td>
          <table >
            <?php
          while($row = $result->fetch_assoc())
           {
        ?>
            <tr>
              <td><?php echo $row['Name']; ?></td>
              <td><?php echo $row['AboutMe']; ?></td> 
              <td><?php echo $row['Email']; ?></td> 
              <td><?php echo $row['Linkedin']; ?></td> 
          </tr>
        <?php
           }
           ?>

                <!--echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["AboutMe"] . "</td><td>". $row["Email"]. "</td></tr>"  . $row["Linkedin"]. "</td></tr>";-->

    
        </tr1>
      </table1>
    </div>
</div>


  <div class="row">
    <div class="column3" style="background-color:transparent">
      
      <div class="city">
        <table rules="rows">
          <tr>
            <td style="color: rgb(88, 87, 87);"> About Nidhi Yadav</td>
          </tr>
          <tr>
           <td><a style="text-decoration: none; font-size: larger;color: #008EE2;" href="resume1.pdf">Resume</a></td>
          </tr>  
          
          <tr>
           <td><a style="text-decoration: none; font-size: larger;color: #008EE2;" href="blog.html">Blog</a></td>
          </tr>
          
       </table>
    </div>
  </div>
  </body>
</html>
