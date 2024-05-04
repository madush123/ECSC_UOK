<?php
$servername = "127.0.0.1"; 
$username = "root"; 
$password = "root"; 
$dbname = "ecsc_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email =  $_POST['email'];
$phoneno =  $_POST['phoneno'];
$messages =  $_POST['messages'];

// Prepare SQL query to insert data into the table
$sql = "INSERT INTO guestinfo (fname,lname,email,pnumber,messages) VALUES ('$firstname', '$lastname','$email','$phoneno','$messages')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
header("Location: index.html")

?>
