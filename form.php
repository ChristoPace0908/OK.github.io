<?php
// Connect to the database
$db = mysqli_connect("hostname", "username", "password", "database_name");

// Check if the form has been submitted
if (isset($_POST["submit"])) {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Insert the data into the database
    $query = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
    mysqli_query($db, $query);
}
?>