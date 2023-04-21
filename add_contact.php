<?php
require_once 'Contact.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Create a new Contact object with the submitted data
    $contact = new Contact($name, $email, $phone);

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'contact_manager');

    // Check for database connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the contact data into the database
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $phone);

    if ($stmt->execute()) {
        echo "Contact added successfully";
    } else {
        echo "Error adding contact: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
