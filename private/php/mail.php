<?php

if (!empty($_POST["name"]) && preg_match("/^[a-zA-Z-' ]*$/", $name) && !empty($_POST["subject"]) && !empty($_POST["email"]) && !empty($_POST["content"]) && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($subject) < 20) {

    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $content = $_POST["content"];

    $email_to = "ceo@kollk.com";
    $email_headers = "From: " . $email;
    $txt = "You have recieved email from " . $name . ".\n\n" . $content;

    $retval = mail($email_to, $subject, $txt, $email_headers);
    if ($retval) {
        echo "<div class='success';>Message sent successfully...</div>";
    } else {
        echo "<div class='fail';>Message couldn't be sent...</div>";
    }
}

?>