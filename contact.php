<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(strip_tags(trim($_POST['nom'])));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => "Format d'email invalide."]);
        exit;
    }

    if (empty($nom) || empty($email) || empty($message)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => "Tous les champs obligatoires doivent être remplis."]);
        exit;
    }

    $destinataire = "yoandeloustal45@gmail.com";
    $objet = "Nouveau message Portfolio de $nom";
    
    $contenu = "Nom: $nom\n";
    $contenu .= "Email: $email\n\n";
    $contenu .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    $fichierAttache = false;
    $boundary = md5(time());
    
    if (isset($_FILES['pj']) && $_FILES['pj']['error'] === UPLOAD_ERR_OK) {
        $fichierAttache = true;
        
        $typesAutorises = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf'];
        $typeFile = $_FILES['pj']['type'];
        
        if (!in_array($typeFile, $typesAutorises)) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => "Type de fichier non autorisé."]);
            exit;
        }
        
        $tailleMax = 5 * 1024 * 1024;
        if ($_FILES['pj']['size'] > $tailleMax) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => "Le fichier est trop volumineux (max 5 MB)."]);
            exit;
        }
        
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n";
        
        $message_complet = "--{$boundary}\r\n";
        $message_complet .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";
        $message_complet .= $contenu . "\r\n\r\n";
        
        $nomFichier = $_FILES['pj']['name'];
        $contenuFichier = chunk_split(base64_encode(file_get_contents($_FILES['pj']['tmp_name'])));
        
        $message_complet .= "--{$boundary}\r\n";
        $message_complet .= "Content-Type: {$typeFile}; name=\"{$nomFichier}\"\r\n";
        $message_complet .= "Content-Transfer-Encoding: base64\r\n";
        $message_complet .= "Content-Disposition: attachment; filename=\"{$nomFichier}\"\r\n\r\n";
        $message_complet .= $contenuFichier . "\r\n\r\n";
        $message_complet .= "--{$boundary}--";
        
        $contenu = $message_complet;
    }

    if (mail($destinataire, $objet, $contenu, $headers)) {
        http_response_code(200);
        header('Location: index.html');
    } else {
        http_response_code(500);
        header('Location: index.html');
    }
} else {
    http_response_code(403);
    header('Location: index.html');
}
?>
