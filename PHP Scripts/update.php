<?php

    $connection = mysqli_connect("localhost","id13599490_cruddb","2og5NT]s5dS\+q1s","id13599490_crud");    
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];

    $sql = "UPDATE data SET  name = '$name', email = '$email', contact = '$contact', address = '$address' WHERE id = '$id' ";

    $result = mysqli_query($connection,$sql);

    if($result){
        echo "Data Updated";

    }
    else{
        echo "Failed";
    }
    mysqli_close($connection);    
?>