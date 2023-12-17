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
        No: <input type="number" name="No"><br/>
        Route ID: <input type="text" name="RouteID"><br/>
        Plate No: <input type="text" name="PlateNo"><br/>
        Time: <input type="text" name="Time"><br/>
        Status: <input type="boolean" name="Status"><br/>
        <input type="reset" name="reset">
        <input type="submit" name="submit" value="Register">
        </form>
    </body>
</html>