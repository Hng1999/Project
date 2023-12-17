<?php
$conn=mysqli_connect("localhost","root","")or die("Couldn't connect to server.");
            $db=mysql_select_db("websitedb",$conn)or die("Couldn't connect to database.");
            $routeid=$_POST['RouteID'];
            $plateno=$_POST['PlateNo'];
            $time=$_POST['Time'];
            $status=$_POST['Status'];
            $sql="UPDATE timetable set RouteID='$routeid',PlateNo='$plateno',Time='$time',Status='$status'";
            $result=mysql_query($sql)or die("Could not execute query");
            if($result){
            echo"Timetable updated<br>";
            echo"<a href='adminhome.php'>Back</a>";}
?>