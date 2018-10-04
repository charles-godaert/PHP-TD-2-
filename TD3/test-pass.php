<?php
include 'login.php';


session_start();


echo 'Je suis dans "test-pass.php"';

//Recupération des données du formulaire
$login = $_POST['login'];
$password = $_POST['mdp'];
$action = $_POST['actionOfValider'];


//Requete MySQL recup mot de passes
$queryPasswd = 'SELECT password FROM user WHERE identifiant = "' . $login . '";';
$queryId = 'SELECT identifiant FROM user WHERE identifiant = "' . $login . '";';

//Envoi des requetes au serveur dans dbResult* et verification d'erreur
if(!($dbResultPasswd = mysqli_query($dbLink, $queryPasswd)))
{
    echo 'Erreur dans requête<br />';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $queryPasswd . '<br/>';
    exit();
}
else {
   var_dump($dbResultPasswd);
}

if(!($dbResultId = mysqli_query($dbLink, $queryId)))
{
    echo 'Erreur dans requête<br />';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $queryId . '<br/>';
    exit();
}
else {
   var_dump($dbResultId);
}


//Retournement des résultats dans des tableaux indéxés
$IdBd = mysqli_fetch_row($dbResultId);
$PasswdBd = mysqli_fetch_row($dbResultPasswd);

//Passage de tableau indéxé en string
$IdBdString = $IdBd[0];
$PasswdBdString = $PasswdBd[0];


/*
if($action == 'Valider')
{
    echo 'Systeme de Login :<br/>';

    $message = 'Vos identifiants de connexion: ' . '<br/>';
    $message .= 'Login : ' . $login . '<br/>';
    $message .= 'Mot de passe entré : ' . $password . '<br/>';
    echo $message;
}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
*/

//test de connexion par comparaison et redirection vers les pages adaptées
if (($login == $IdBdString) && ($password ==  $PasswdBdString) && ($login != null)) {
    $_SESSION['login'] = 'ok';
    //redirect good page
    header('Location: pageRight.php');
}

else {
    $_SESSION['login'] = 'PasOk';
    //redirect wrong page
    header('Location: ' . $PageAccueilAdr . '?step=ERROR');
}

?>