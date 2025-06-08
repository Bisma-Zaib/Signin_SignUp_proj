<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php';

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName']; // This matches your form field name
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email exists
    $checkEmail = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $checkEmail->store_result();

    if ($checkEmail->num_rows > 0) {
        die("Email already exists!");
    } else {
        // Insert user
        $insert = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $insert->bind_param("ssss", $firstName, $lastName, $email, $password);
        
        if ($insert->execute()) {
            echo "User created! ID: " . $conn->insert_id;
            // Redirect after successful registration
            header("Location: homepage.php");
            exit();
        } else {
            die("Error: " . $conn->error);
        }
    }
}

//SIGN IN LOGIC
if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $inputPassword = $_POST['password'];

    // Fetch user (prepared statement)
    $getUser = $conn->prepare("SELECT email, password FROM users WHERE email = ?");
    $getUser->bind_param("s", $email);
    $getUser->execute();
    $result = $getUser->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($inputPassword, $user['password'])) {
            $_SESSION['email'] = $user['email']; // Valid login
            header("Location: homepage.php");
            exit();
        } else {
            die("Invalid password!"); // Wrong password
        }
    } else {
        die("User not found!"); // Email doesn't exist
    }
}
?>