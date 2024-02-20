<?php
// Definisci l'elenco delle pagine consentite
$allowedPages = [
    'home' => 'views/home.php',
    'projects' => 'views/projects.php',
];

// Ottieni il parametro 'page' dall'URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Controlla se la pagina richiesta è nell'elenco delle pagine consentite
if (array_key_exists($page, $allowedPages)) {
    // Includi il file PHP corrispondente alla pagina richiesta
    include($allowedPages[$page]);
} else {
    // Mostra una pagina di errore se la pagina richiesta non è valida o non è definita
    echo "404 Page Not Foundcapocchia";
}
?>
