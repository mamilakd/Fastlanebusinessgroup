<?php
function validateName($name) {
    return !empty($name) && preg_match("/^[a-zA-Z\s]+$/", $name);
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function validateMessage($message) {
    return !empty($message) && strlen($message) <= 500;
}

function validateContactForm($data) {
    $errors = [];

    if (!validateName($data['name'])) {
        $errors['name'] = "Invalid name. Please enter a valid name.";
    }

    if (!validateEmail($data['email'])) {
        $errors['email'] = "Invalid email address. Please enter a valid email.";
    }

    if (!validateMessage($data['message'])) {
        $errors['message'] = "Message is required and should not exceed 500 characters.";
    }

    return $errors;
}
?>