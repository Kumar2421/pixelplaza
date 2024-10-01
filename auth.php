<?php
session_start();
require_once 'db.php'; // Include the database connection

// Handle registration
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        registerUser($conn);
    } elseif (isset($_POST['login'])) {
        loginUser($conn);
    }
}

function registerUser($conn) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    // Check if passwords match
    if ($password !== $re_password) {
        echo "Passwords do not match.";
        return;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the user already exists
    $sql = "SELECT id FROM pixelplaza WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Email already exists.";
        return;
    }

    // Insert new user
    $sql = "INSERT INTO pixelplaza (email, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $hashed_password);

    if ($stmt->execute()) {
        // Redirect to index.html after successful registration
        header("Location: index.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

function loginUser($conn) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT id, password FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Set session and redirect
            $_SESSION['user_id'] = $user['id'];
            header("Location: index.html");
            exit();
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "User not found.";
    }
}
?>
