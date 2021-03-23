<?php
$uri = $_SERVER['REQUEST_URI'];
$uri = trim($uri, "/"); // elimino / dall'inizio e la fine
$uri = explode("/", $uri); // parametri e creo un array

switch ($uri[0]) {
    case 'test': // routing  della pagina
        if (!isset($uri[1])) { // è richiesto un parametro
            require __DIR__ . '/404.php';
            echo 'no';
        } else {
            $id = $uri[1]; // passo il parametro come prima cosa prima di caricare la pagina
            require __DIR__ . '/' . $uri[0] . '.php'; // carico la pagina
        }
        break;

    default:  // non c'è routing
        require __DIR__ . '/404.php';
        break;
}
