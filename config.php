<?php
function getConfig($file = 'config/config.ini') {
    static $config = null;
    if ($config === null) {
        $config = parse_ini_file($file, true);
        if ($config === false) {
            throw new Exception("Erreur : Impossible de charger le fichier de configuration.");
        }
    }
    return $config;
}
