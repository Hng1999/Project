<?php
// get_timetable.php

$mysql = mysqli_connect("localhost", "root", "");

if (!$mysql) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($mysql, 'websitedb');

//$busType = $_POST['busType'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["busType"])) {
        $busType = $_POST['busType'];
        $routeid = $_POST['route'];
    }}

    $stmt = $mysql->prepare("SELECT * FROM timetable WHERE RouteID = ?");
    $stmt->bind_param("s", $routeid);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $data = '';

    while ($row = mysqli_fetch_assoc($result)) {
        $data .= <<<HTML
            <table border="1" cellpadding="5" cellspacing="0">
                <tr>
                    <th>No<th>Bus Type<th>Route ID<th>WDFirstBus<th>WDLastBus<th>WEFirstBus<th>WELastBus<th>Frequency<th>Status
                <tr>
                    <td>{$row['No']}<td>{$row['BusType']}<td>{$row['RouteID']}<td>{$row['WDFirstBus']}<td>{$row['WDLastBus']}<td>{$row['WEFirstBus']}<td>{$row['WELastBus']}<td>{$row['Frequency']}<td>{$row['Status']}
    HTML;
    }
    if (!$result) {
        die("Query failed: " . mysqli_error($mysql));}
    $stmt->close();
    mysqli_close($mysql);
    
    echo json_encode($data);
?>


    
