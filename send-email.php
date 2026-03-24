<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = strip_tags(trim($_POST["full-name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    if ( empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        echo json_encode(["status" => "error", "message" => "Veuillez remplir correctement tous les champs."]);
        exit;
    }

    $to = "contact@chadconnect.com";
    $subject = "Nouveau message de contact de $name";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["status" => "success", "message" => "Merci ! Votre message a été envoyé."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Oups ! Une erreur s'est produite. Essayez plus tard."]);
    }

} else {
    echo json_encode(["status" => "error", "message" => "Il y a un problème avec votre soumission."]);
}
?>