<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Send email (you may need to configure your server for this)
    $to = 'your@example.com';
    $subject = 'Gala Sign-Up';
    $message = "New Gala Sign-Up:\n\n";
    $message .= "Email: $email\n";
    $message .= "First Name: $firstName\n";
    $message .= "Last Name: $lastName\n";
    $message .= "Address: $address\n";
    $message .= "Phone Number: $phone\n";

    mail($to, $subject, $message);

    // Send response back to the client
    $response = ['message' => 'Sign-up successful!'];
    echo json_encode($response);
} else {
    // If not a POST request, return an error
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Method not allowed']);
}
?>
