<html>
    <head>
        <title>Register Timetable</title>
    </head>
    <body>
        <?php
        if(isset($_POST['submit'])){
        echo $_POST['PlateNo'];
        echo "<br/>";
        echo $_POST['Time'];
        echo "<br/>";
        echo $_POST['Status'];
        echo "<br/>";
        }
        ?>

        <form action="processr.php" method="post">
        PlateNo: <input type="text" name="PlateNo"><br/>
        Time: <input type="text" name="Time"><br/>
        Status: <input type="boolean" name="Status"><br/>
        <input type="reset" name="reset">
        <input type="submit" name="submit" value="Register">
        </form>
    </body>
</html>