<?php

include('config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password
    $name = $_POST["name"];
    $email = $_POST["email"];
    $bio = $_POST["bio"];

    // SQL query to insert data into the authors table
    $sql = "INSERT INTO authors (username, password_hash, name, email, bio) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $username, $password, $name, $email, $bio);

    if ($stmt->execute()) {
        header('Location: login.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
