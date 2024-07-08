<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the form data
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);

    // Validate the form data
    if (!empty($fullname) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // TODO: Add code to save the data to a database or send an email

        // For demonstration, we'll just redirect to a thank you page
        header("Location: thank-you.html");
        exit();
    } else {
        // If data is invalid, redirect back to the form or show an error message
        header("Location: music-lesson.html?error=invalidinput");
        exit();
    }
} else {
    // If the form is accessed via GET method, redirect to the form
    header("Location: music-lesson.html");
    exit();
}
?>
