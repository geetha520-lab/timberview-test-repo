<?php
header('Content-Type: application/json');

// Database config
$host = "localhost";
$username = "staidlog_timberview";
$password = "EhC3TtWPzguNkJXdAZWa";
$dbname = "staidlog_timberview";

// Create DB connection
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode([
        'success' => false,
        'message' => 'Database connection failed: ' . $conn->connect_error
    ]);
    exit;
}

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $number  = trim($_POST['number']);
    $message = trim($_POST['message']);

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, subject, number, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $subject, $number, $message);

    if ($stmt->execute()) {

        // ---------------------------------------------------------
        // EMAIL FUNCTIONALITY DISABLED — ONLY DB INSERT WORKS
        // ---------------------------------------------------------
        /*
        $to = "maddilinarayana508@gmail.com";
        $email_subject = "New Contact Form Submission: " . $subject;

        $email_body = "You received a new message:\n\n"
            . "Name: $name\n"
            . "Email: $email\n"
            . "Phone: $number\n"
            . "Message:\n$message";

        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        @mail($to, $email_subject, $email_body, $headers);
        */
        // ---------------------------------------------------------

        echo json_encode([
            'success' => true,
            'message' => 'Message saved successfully.'
        ]);

    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Database error: ' . $stmt->error
        ]);
    }

    $stmt->close();
}
?>
