<?php
// Destinataire
$destinataire = 'contact@oprotec.fr';

// Récupération et nettoyage des champs
$nom     = htmlspecialchars(trim($_POST['nom']     ?? ''));
$prenom  = htmlspecialchars(trim($_POST['prenom']  ?? ''));
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$tel     = htmlspecialchars(trim($_POST['tel']     ?? ''));
$sujet   = htmlspecialchars(trim($_POST['sujet']   ?? ''));
$message = htmlspecialchars(trim($_POST['message'] ?? ''));

// Vérifications minimales
if (empty($nom) || empty($prenom) || empty($email) || empty($message)) {
    header('Location: index.html?statut=erreur');
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.html?statut=erreur');
    exit;
}

// Construction de l'email
$sujet_mail = "Nouveau message via le site O'PROTEC" . ($sujet ? " — $sujet" : '');

$corps  = "Nouveau message reçu depuis le formulaire de contact du site.\n\n";
$corps .= "Nom       : $nom $prenom\n";
$corps .= "E-mail    : $email\n";
$corps .= "Téléphone : " . ($tel ?: 'Non renseigné') . "\n";
$corps .= "Sujet     : " . ($sujet ?: 'Non précisé') . "\n\n";
$corps .= "Message :\n$message\n";

$entetes  = "From: noreply@oprotec.fr\r\n";
$entetes .= "Reply-To: $email\r\n";
$entetes .= "Content-Type: text/plain; charset=UTF-8\r\n";

$envoye = mail($destinataire, $sujet_mail, $corps, $entetes);

if ($envoye) {
    header('Location: index.html?statut=ok');
} else {
    header('Location: index.html?statut=erreur');
}
exit;
