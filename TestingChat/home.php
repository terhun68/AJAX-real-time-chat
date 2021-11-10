<?php
    $conn = new mysqli('127.0.0.1', 'root', '', 'testing');
    if($conn->connect_error) die ("fatal error");
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    function chk(){
        var name = $('#name').val();
        var dataString = 'name='+name;
        $.ajax({
            type: "post",
            url: "insert.php",
            data: dataString,
            cache: false,
            success:function(data){
                $('#name').val("");
            }
            });
        return false;
    };
</script>
</head>
<form>
    <input type="text" id="name" name="name">
    <input type="submit" name="btn_send" id="btn_send" value="Send" onclick="return chk()">
</form>
<div id="load_message"></div>
</html>
<script>
    $(document).ready(function(){
        setInterval(function(){
            $('#load_message').load("fetch.php");
        }, 1000);
    });
</script>

