

<?php
    include ("db.txt");
    mysql_select_db("bakerre1", $mydb);

    
$sql="INSERT INTO Instructor (name, type, phone, payrate, SSN, email, Salary)
VALUES
('$_POST[name]', '$_POST[type]', '$_POST[phone]', '$_POST[payrate]', '$_POST[SSN]', '$_POST[email]', '$_POST[Salary]')";
if (!mysql_query($sql,$mydb))
 {
 die('Error: ' . mysql_error());
 }



echo "1 record added";

mysql_close($mydb);
?>

