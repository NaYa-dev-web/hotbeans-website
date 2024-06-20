<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $message = $_POST['contact_message'];

    echo "Thank you, $name. Your message has been received.";
}
?>