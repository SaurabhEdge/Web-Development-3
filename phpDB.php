<?php

#php output display


   // echo __DIR__ . '../../';
    $db= "localhost";
    $dbname = "ss7586";
    $username = "ss7586";
    $password = "Bleep7&antler";

    // Create connection
    $conn = new mysqli($db,$username, $password, $dbname,);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if($conn){
        if(!empty($_POST["name"]) && !empty($_POST["comment"])){

            $stmt = $conn->prepare("INSERT INTO comments (name, comment) VALUES (?, ?)");
            $stmt->bind_param("ss", $_POST["name"], $_POST["comment"]);           
            $stmt->execute();           
            $stmt->close();

        }
    }

    $result = $conn->query("SELECT * FROM comments");

    if($result){
        while($row_holder =mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $records[] = $row_holder;

        }
    }
    $conn->close();

?>