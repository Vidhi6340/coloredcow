<?php
    $conn = mysqli_connect('localhost','root','','vidhi');
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    }
?> 