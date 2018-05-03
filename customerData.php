

<?php
    include ("db.txt");
    mysql_select_db("bakerre1", $mydb);

    
$sql="INSERT INTO Customer (name, email, date, hoursTaken, instructorName)
VALUES
('$_POST[name]', '$_POST[email]', '$_POST[date]', '$_POST[hoursTaken]', '$_POST[instructorName]')";
if (!mysql_query($sql,$mydb))
 {
 die('Error: ' . mysql_error());
 }



echo "1 record added";

mysql_close($mydb);
?>

