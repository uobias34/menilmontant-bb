<?php
$variables = require_once __DIR__ . '/variables.php';
require_once 'sendEmailFunction.php';

session_start(); // Démarrage de la session si ce n'est pas déjà fait

$_SESSION['form_data'] = $_POST;

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérer les données du formulaire
    $email = htmlspecialchars(trim($_POST['email']));
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $objet = htmlspecialchars(trim($_POST['object']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Vérification reCAPTCHA
    $recaptcha_secret = $config['recaptcha']['secret'];
    $recaptcha_response = $_POST['g-recaptcha-response'];



    $url = $config['recaptcha']['url'];
    $data = [
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);

    if ($verify === FALSE) {
        die('Erreur lors de la vérification reCAPTCHA');
    }

    $captcha_success = json_decode($verify);


    if (empty($nom) || empty($prenom) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($objet) || empty($message)) {

        // Redirection vers contact.php avec un message
        $_SESSION['msg'] = '<h5 class="alert alert-danger" role="alert"> Veuillez remplir tous les champs obligatoires.</h5>';
        header("Location: contact.php");
        exit;
    } else if ($captcha_success->success) {
        // Le reCAPTCHA a été validé avec succès


        // Envoi du mail
        $emailSent = sendEmail($email, $nom, $prenom, $telephone, $objet, $message, $config['email'], $config['security']);

        if ($emailSent) {
            $_SESSION['msg'] = '<h5 class="alert alert-success" role="alert"> <strong>Message envoyé !</strong> Merci de nous avoir contactés. Nous reviendrons vers vous dès que possible.</h5>';
        } else {
            $_SESSION['msg'] = '<h5 class="alert alert-danger" role="alert"> Désolé, un problème technique a empêché l\'envoi du message. Veuillez réessayer plus tard, ou envoyez directement un e-mail à l’adresse ci-dessus.</h5>';
        }

        // Redirection vers contact.php avec un message
        header("Location: contact.php");
        exit;
    } else {
        // Le reCAPTCHA n'a pas été validé

        // Redirection vers contact.php avec un message d'erreur
        $_SESSION['msg'] = '<div class="col-12"><div class="alert alert-danger" role="alert"> Veuillez cocher la case "Je ne suis pas un robot." et réessayer.</div></div>';
        header("Location: contact.php");
        exit;
    }
} else {
    // Si le formulaire n'a pas été soumis, rediriger avec un message d'erreur
    $_SESSION['msg'] = '<h5 class="alert alert-danger" role="alert"> Désolé, un problème technique a empêché l\'envoi du message. Veuillez réessayer plus tard, ou envoyez directement un e-mail à l’adresse ci-dessus.</h5>';
    header("Location: contact.php");
    exit;
}
