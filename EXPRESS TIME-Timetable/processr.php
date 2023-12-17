<?php
//$conn=mysqli_connect("localhost","root","")or die("Couldn't connect to server.");
            //$db=mysqli_select_db("websitedb",$conn)or die("Couldn't connect to database.");
            $mysql = mysqli_connect("localhost", "root", "");
            mysqli_select_db($mysql, 'websitedb');
            $no=$_POST['No'];
            $routeid=$_POST['RouteID'];
            $plateno=$_POST['PlateNo'];
            $time=$_POST['Time'];
            $status=$_POST['Status'];
            $sql="INSERT INTO timetable(No,RouteID,PlateNo,Time,Status)values('$no','$routeid','$plateno','$time','$status')";
            //$result=mysql_query($sql)or die("Could not execute query");
            $result = mysqli_query($mysql, "SELECT * FROM timetable");
            if($result){
            echo"Record updated<br>";
            echo"<a href='adminhome.php'>Back</a>";}
?>