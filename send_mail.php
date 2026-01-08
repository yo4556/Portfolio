<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification du honeypot (si rempli, c'est un robot)
    if (!empty($_POST['website'])) {
        die("Erreur détectée.");
    }

    // Nettoyage et validation
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST['message']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Adresse email invalide.");
    }

    if (empty($name) || empty($message)) {
        die("Tous les champs sont requis.");
    }

    // Préparation de l'email
    $to = "yoandeloustal45@gmail.com";
    $subject = "Nouveau message de votre portfolio";
    $headers = "From: contact@tonsite.fr\r\n"; // Remplacer par un vrai mail si possible
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $fullMessage = "Nom: $name\n";
    $fullMessage .= "Email: $email\n\n";
    $fullMessage .= "Message:\n$message\n";

    // Envoi du mail
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Message envoyé avec succès ! Merci.";
    } else {
        echo "Une erreur est survenue, veuillez réessayer.";
    }
} else {
    echo "Méthode non autorisée.";
}

header("location:index.php")
?>