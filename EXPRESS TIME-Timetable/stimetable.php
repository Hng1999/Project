<html>
    <body>
        <?php
        echo '<table border="0" cellspacing="2" cellpadding="2"> 
        <tr> 
            <td> <font face="Arial">No</font> </td> 
            <td> <font face="Arial">RouteID</font> </td> 
            <td> <font face="Arial">PlateNo</font> </td> 
            <td> <font face="Arial">Time</font> </td> 
            <td> <font face="Arial">Status</font> </td> 
        </tr>';
        //$conn=mysql_connect("localhost","root","")or die("Couldn't connect to server.");
        //$db=mysql_select_db("websitedb",$conn)or die("Couldn't connect to database.");
        $mysql = mysqli_connect("localhost", "root", "");
        mysqli_select_db($mysql, 'websitedb');
        $no=$_POST['No'];
        $routeid=$_POST['RouteID'];
        $plateno=$_POST['PlateNo'];
        $time=$_POST['Time'];
        $status=$_POST['Status'];
        //$sql="SELECT * FROM timetable;
        $result = mysqli_query($mysql, "SELECT * FROM timetable");
        if($result){
            echo '<tr> 
            <td>'.$no.'</td> 
            <td>'.$routeid.'</td> 
            <td>'.$plateno.'</td> 
            <td>'.$time.'</td> 
            <td>'.$status.'</td> 
        </tr>';}
        ?>
    </body>
</html>