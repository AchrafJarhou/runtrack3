<?php

// Charger le fichier .env
$env = parse_ini_file('.env');

// Définir les variables d'environnement
define('DB_HOST', $env['DB_HOST']);
define('DB_NAME', $env['DB_NAME']);
define('DB_USER', $env['DB_USER']);
define('DB_PASS', $env['DB_PASS']);
