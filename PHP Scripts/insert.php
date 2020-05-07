<?php

    $connection = mysqli_connect("localhost","id13599490_cruddb","2og5NT]s5dS\+q1s","id13599490_crud");    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];

    $sql = "INSERT INTO data(name,email,contact,address) VALUES ('$name','$email','$contact','$address')";

    $result = mysqli_query($connection,$sql);

    if($result){
        echo "Data Inserted";

    }
    else{
        echo "Failed";
    }
    mysqli_close($connection);

?>