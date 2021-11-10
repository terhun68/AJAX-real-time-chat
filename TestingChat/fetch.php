<?php
    $conn = new mysqli('localhost', 'root', '', 'testing');
    
    $sql="SELECT * from chat";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {    
        while($row = $result->fetch_assoc()) {
            echo $row['id']."<br>";
        }
    }
   
?>
