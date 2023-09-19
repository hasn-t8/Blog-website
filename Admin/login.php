<?php
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM authors WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row && password_verify($password, $row["password_hash"])) {
        $_SESSION["user_id"] = $row["author_id"];
        $_SESSION["user_name"] = $row["name"];
        header("Location: add_post.html");
    } else {
        header("Location: login.html?error=1");
    }
}
?>
