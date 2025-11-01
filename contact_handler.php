<?php
require_once 'db.php';
require_once 'validators.php';

function handleContactFormSubmission($data) {
    $errors = validateContactForm($data);

    if (!empty($errors)) {
        return ['success' => false, 'errors' => $errors];
    }

    $db = getDatabaseConnection();
    $stmt = $db->prepare("INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)");
    
    $stmt->bindParam(':name', $data['name']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':message', $data['message']);

    if ($stmt->execute()) {
        return ['success' => true];
    } else {
        return ['success' => false, 'errors' => ['Database error: Unable to save the contact message.']];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = handleContactFormSubmission($_POST);
    echo json_encode($response);
}
?>