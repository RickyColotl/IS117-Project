<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Get form data
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : "";
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : "";

    echo "<h1>Form Submission Result</h1>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Subject:</strong> " . $subject . "</p>";
    echo "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";
} else {
    echo "<p>This page is meant to process form data. Please submit the form.</p>";
}
?>
