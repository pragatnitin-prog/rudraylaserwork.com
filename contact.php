<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "nitinbhai";

// Database connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Insert query
$sql = "INSERT INTO contact_messages(fullname, email, phone, message)
VALUES ('$fullname', '$email', '$phone', '$message')";

// Execute query
if (mysqli_query($conn, $sql)) {

    echo "
    <script>
        alert('Message Sent Successfully!');
        window.location.href='contact.html';
    </script>
    ";

} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>