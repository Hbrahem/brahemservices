<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "hajbrahem.habib@gmail.com"; // Mettez ici votre adresse e-mail de réception
    $subject = "Nouveau message depuis le formulaire";
    $message = "Nom: " . $_POST["fullname"] . "\n";
    $message .= "Téléphone: " . $_POST["phone"] . "\n";
    $message .= "Adresse e-mail: " . $_POST["email"] . "\n";
    $message .= "Message: " . $_POST["message"];

    $headers = "From: " . $_POST["email"] . "\r\n";
    $headers .= "Reply-To: " . $_POST["email"] . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>
