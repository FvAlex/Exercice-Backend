<?php
use Symfony\Component\Yaml\Yaml;

require_once __DIR__.'/../vendor/autoload.php';

$config = Yaml::parseFile(__DIR__.'/../config/config.yaml');
$login= "p7";
$password = "pop";

if (!password_verify($password, $config['password'])) {
    echo 'Le mot de passe ou le login est invalide !';
}