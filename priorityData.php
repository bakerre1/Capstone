

<?php
    include ("db.txt");
    mysql_select_db("bakerre1", $mydb);

    
$sql="INSERT INTO Priority (InstructorName, rank, type, LessonType)
VALUES
('$_POST[name]', '$_POST[rank]', '$_POST[type]', '$_POST[LessonType]')";
if (!mysql_query($sql,$mydb))
 {
 die('Error: ' . mysql_error());
 }



echo "1 record added";

mysql_close($mydb);
?>

