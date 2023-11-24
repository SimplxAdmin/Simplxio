<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $company = $_POST["company"];
	$email = $_POST["email"];
    $message = $_POST["message"];

    $to = "admin@simplx.io";
    $subject = "New Contact Form Submission";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $mailBody = "Name: $name <br>Email: $email <br>Company: $company <br>Message: $message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Handle the case where the form wasn't submitted properly
    echo "Please fill in all fields before submitting.";
}
?>
