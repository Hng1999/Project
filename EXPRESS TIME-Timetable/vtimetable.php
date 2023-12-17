<html>
    <body>
        <?php
        $conn=mysql_connect("localhost","root","")or die("Couldn't connect to server.");
        $db=mysql_select_db("websitedb",$conn)or die("Couldn't connect to database.");
        $routeid=$_POST['RouteID'];
        $plateno=$_POST['PlateNo'];
        $time=$_POST['Time'];
        $status=$_POST['Status'];
        $sql="INSERT INTO timetable(RouteID,PlateNo,Time,Status)values('$routeid','$plateno','$time','$status')";
        $result=mysql_query($sql)or die("Could not execute query");
        if($result){
        echo"Record updated<br>";
        $sql="SELECT * FROM timetable WHERE RouteID=$routeID";}
        ?>
    </body>
</html>