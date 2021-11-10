<?php

    $conn = new mysqli('127.0.0.1', 'root', '', 'testing'); 
    if($conn->connect_error) die ("fatal error");

    $name = $_POST['name'];
    $sql="INSERT INTO chat VALUES('$name','$name')";
    $result=$conn->query($sql);
?>
