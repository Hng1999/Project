<html>
    <body>
        <?php
            $conn=mysql_connect("localhost","root","")or die("Couldn't connect to server.");
            $db=mysql_select_db("websitedb",$conn)or die("Couldn't connect to database.");
            $routeid=$_POST['RouteID'];
            $plateno=$_POST['PlateNo'];
            $time=$_POST['Time'];
            $status=$_POST['Status'];
            $sql="UPDATE timetable SET RouteID='$routeid',PlateNo='$plateno',Time='$time',Status='$status' WHERE RouteID='$routeid'";
            $result=mysql_query($sql)or die("Could not execute query");
            if($result){
            echo"Record updated<br>";
            echo"<a href='vtimetable.php'>Back</a>";}
        ?>
    </body>
</html>