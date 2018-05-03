<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    </head>
    <body>
    <div id="header">
    <table>
    <h2>French Swiss Ski College</h2>
    <tr><a href="index.html">
    <img src=https://skifrenchswiss.com/files/frenchswiss_logo.jpg align=right height=200px width=200px></tr>
    </a>
    <p>Operational Database</p>
    <ul id="menu">
        <li><a href="schedule.html">Schedule</a></li>
        <li><a href="view.html">View Employees</a></li>
         <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Insert Data <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="instructor.html" class="w3-bar-item w3-button">Employee Data</a>
      <a href="customer.html" class="w3-bar-item w3-button">Customer Data</a>
      <a href="priority.html" class="w3-bar-item w3-button">Priority List</a>
    </div> 
</div> 
        <li><a href="customerData.html">Customer Data</a></li>
    </ul>
</div>
</table>
 <?php/*
    $host = "localhost";
    $username = "bakerre1";
    $password = "900537041";
    $dbname = "bakerre1";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    } else {
    #echo "Connected!";
    }*/
    
?>    
    <body>
    
<?php
    include("db.txt");
    mysql_select_db("bakerre1", $mydb);

    $table = $_GET['value'];
    $query = $_GET['query'];
    $select = "select * from ".$table.";";
    $sql = @mysql_query($select);
    if( !mysql_query($select, $mydb))
    {
        die('Error: ' . mysql_error());
    }
    if ($table == 'Instructor') {
      echo ("<table style='margin:auto' border='1'> <tr> <th>Name</th> <th>Type</th> <th>Phone</th><th>Payrate</th>  <th>SSN</th> <th>Email</th> <th>Rank</th> <th>Salary</th> </tr>");
      while ($row = mysql_fetch_array($sql)) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['type']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['payrate']."</td>";
        echo "<td>".$row['SSN']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['rank']."</td>";
        echo "<td>".$row['Salary']."</td>";
        echo "</tr>";
      }
    }
    else if($table == 'Customer') {
      echo "<table style='margin:auto' border='1'> <tr> <th>Name</th> 
            <th>email</th> <th>date</th><th>Hours Taken</th> <th>instructorName</th> >";
      while ($row = mysql_fetch_array($sql)) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['date']."</td>";
        echo "<td>".$row['hoursTaken']."</td>";
        echo "<td>".$row['instructorName']."</td>";
        echo "</tr>";
      }
    }
    else if($table == 'Priority') {
      echo "<table style='margin:auto' border='1'> <tr> <th>Instructor Name</th>
            <th>Rank</th> <th>Type</th><th>LessonType</th>>";
      while ($row = mysql_fetch_array($sql)) {
        echo "<tr>";
        echo "<td>".$row['InstructorName']."</td>";
        echo "<td>".$row['rank']."</td>";
        echo "<td>".$row['type']."</td>";
        echo "<td>".$row['LessonType']."</td>";
        echo "</tr>";
      }
    }
    else {
      echo "Query failed!";
    }
    echo "</table>";

    ?>
        
    </body> 
</html>

<style>
body,h1,h2,h3,h4,h5 {font-family: "Times New Roman", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>

