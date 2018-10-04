<?php

session_start();
if($_SESSION['login'] != 'ok')
{
    die('Erreur d\'authentification');
}
else
{
    echo 'Bon login/mot de passe';
}

