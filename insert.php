<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mySuperDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE TABLE IF NOT EXISTS mySTable (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user VARCHAR(30) NOT NULL,
        senha VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $stmt = $conn->prepare("INSERT INTO mySTable (user, senha) VALUES (?, ?)");

    // Bind parameters
    $stmt->bind_param("ss", $user, $senha);

    // Set the values of the parameters
    $user = $_POST["login"];
    $senha = $_POST["senha"];

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
?>