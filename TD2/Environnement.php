<?php
    // Correspond à l’adresse IP de celui qui visualise la page.
    echo getenv('REMOTE_ADDR'). '<br>';
    // Correspond à l’adresse IP du serveur.
    echo getenv('HTTP_HOST'). '<br>';
    // Correspond au logiciel serveur Web utilisé.
    echo getenv('SERVER_SOFTWARE'). '<br>';
    //Tous les renseignements sur l'environnement
    phpinfo();
?>


