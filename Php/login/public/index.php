<?php

echo 'accueil';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// activation du système d'autoloading de Composer
require __DIR__.'/../vendor/autoload.php';

// démarrage de la session
session_start();

// instanciation du chargeur de templates
$loader = new FilesystemLoader(__DIR__.'/../templates');

// instanciation du moteur de template
$twig = new Environment($loader);

// traitement des données
if (!isset($_SESSION['login'])) {
    // l'utilisateur peut accéder à la page
    $url = '/private.php';
    header("Location: {$url}", true, 301);
    exit();
}

// affichage du rendu d'un template
echo $twig->render('login.html.twig', [
    // transmission de données au template
    'login' => $_SESSION['login'],
    'password' => $_SESSION['password']

]);
