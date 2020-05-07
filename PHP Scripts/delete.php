<?php

    $connection = mysqli_connect("localhost","id13599490_cruddb","2og5NT]s5dS\+q1s","id13599490_crud");    
    $id = $_POST["id"];

    $sql = "DELETE FROM data WHERE id='$id'";

    $result = mysqli_query($connection,$sql);

    if($result){
        echo "Data Deleted";

    }
    else{
        echo "Failed";
    }
    mysqli_close($connection);

?>