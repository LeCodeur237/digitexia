<?php
$path = __DIR__ . '/../resources/lang/fr.json';
$content = file_get_contents($path);
$content = preg_replace('/^\xEF\xBB\xBF/', '', $content);
$json = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
$pairs = [
    'You have been subscribed to the newsletter.' => 'Votre abonnement a la newsletter a bien ete pris en compte.',
    'Please enter a valid email address.' => 'Veuillez entrer une adresse email valide.',
    'Newsletter subscription' => 'Abonnement newsletter',
    'Newsletter error' => 'Erreur newsletter',
    'Dismiss notification' => 'Fermer la notification',
    'Share this article' => 'Partager cet article',
    'Share' => 'Partager',
    'Share on Facebook' => 'Partager sur Facebook',
    'Share on X' => 'Partager sur X',
    'Share on LinkedIn' => 'Partager sur LinkedIn',
    'Share on WhatsApp' => 'Partager sur WhatsApp',
    'Back to Blog' => 'Retour au blog',
    'Comment submitted for review.' => 'Commentaire envoye pour validation.',
    'Your name' => 'Votre nom',
];
foreach ($pairs as $key => $value) {
    $json[$key] = $value;
}
ksort($json, SORT_NATURAL | SORT_FLAG_CASE);
file_put_contents($path, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL);
