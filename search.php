
<?php
include_once('header1.php');
include_once('link.php');
require_once('connection.php');

$searchValue = $_POST['search'];
    $conn = new mysqli("localhost", "root", "", "Registrationdb");
    if ($conn->connect_error) {
        echo "connection Failed: " . $conn->connect_error;
    } else {
        $sql = "SELECT * FROM tblsearch WHERE pname  LIKE '%$searchValue%'";

        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo $row['pname'] . "<br>";
            echo $row['prize'] . "<br>";
        }

      
    }   



/*
require_once('connection.php');
include_once('header.php');
include_once('link.php');


if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $conn = new mysqli("localhost", "root", "", "Registrationdb");
    if ($conn->connect_error) {
        echo "connection Failed: " . $conn->connect_error;
    } else {
        $sql = "SELECT * FROM tblsearch WHERE pname  LIKE '%$searchValue%'";

        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo $row['pname'] . "<br>";
            echo $row['prize'] . "<br>";
        }

      
    }   
}



*/?>