<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db ="db_java";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
    $sql = "INSERT INTO users (f_name, s_name, phone)
    VALUES ('John', 'Doe', '0791493484')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>