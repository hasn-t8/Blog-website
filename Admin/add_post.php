<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('config.php'); // Include your database connection

    // Retrieve data from the form
    $title = $_POST["title"];
    $content = $_POST["content"];
    $category = $_POST["category"];
    $image_url = $_POST["image_url"];
    $author_id = $_SESSION["user_id"]; // Get the author's ID from the session

    // SQL query to insert data into the posts table
    $sql = "INSERT INTO posts (title, content, author_id, category, image_url) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiss", $title, $content, $author_id, $category, $image_url);

    if ($stmt->execute()) {
        header("Location: register.html"); // Redirect to the main page after successful post creation
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
