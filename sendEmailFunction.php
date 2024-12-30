<?php

 use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';


function sendEmail($email, $nom, $prenom, $telephone, $objet, $message, $config_email, $config_securite){
    try {

        // Enregistrement des données du formulaire dans les logs
        error_log("Appel fonction sendEmail -------");
        error_log("Email: {$email}");
        error_log("Nom: {$nom}");
        error_log("Prénom: {$prenom}");
        error_log("Téléphone: {$telephone}");
        error_log("Object: {$objet}");
        error_log("Message: {$message}");

        $smtp_pass = decrypt($config_email['smtp_password'], $config_securite);

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = $config_email['smtp_host'];
        $mail->Port = $config_email['smtp_port'];
        $mail->SMTPAuth = true;
        $mail->Username = $config_email['smtp_user'];
        $mail->Password = $smtp_pass;
        $mail->setFrom($config_email['from'], $config_email['nom_affichage_from']);
        $mail->addAddress($config_email['to'], 'Nom du destinataire');
        
        if ($mail->addReplyTo($email, $nom)) {
            $mail->Subject = $objet;
            $mail->isHTML(false);
            $mail->Body = <<<EOT
            Mail envoyé depuis le formulaire de contact du site menilmontantbb.com : 

            E-mail: {$email}
            Nom: {$nom}
            Prénom: {$prenom}
            Téléphone: {$telephone}
            Object: {$objet}
            Message: {$message}
            EOT;

            // Envoyer l'email et retourner le résultat
            return $mail->send();
        }
        else{
            return false;
        }
    } catch (Exception $e){
        // Si une exception est attrapée, affiche le message d'erreur dans les logs
        error_log("Erreur lors de l'envoi de l'email : {$mail->ErrorInfo}");
        return false;

    }
}


function decrypt($encryptedData, $config) {
    return openssl_decrypt($encryptedData, $config['openssl_method'], $config['secret_key'], 0, $config['openssl_iv']);
}



?>