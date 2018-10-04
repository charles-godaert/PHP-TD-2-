<?php
    //include 'base.php';

    echo 'je suis dans data-processing.php<br/>';


    //recuperation formulaire valeurs
    $id = $_POST['id'];
    $civ = $_POST['civilite'];
    $mail = $_POST['email'];
    $passwd = $_POST['passwd'];
    $passwdVerif = $_POST['passwdVerif'];
    $tel = $_POST['tel'];
    $pays = $_POST['pays'];
    $check = $_POST['check'];


    $action = $_POST['action'];

    if($action == 'mailer')
    {
        echo 'Action est de type maileur<br/>';

        $message = 'Vos identifiants d\'inscription: ' . '<br/>';
        $message .= 'Identifiant : ' . $id . '<br/>';
        $message .= 'Mot de passe : ' . $passwd . '<br/>';
        echo $message;
    }
    elseif($action == 'rec')
    {
         echo 'Action est de type rec<br/>';
         $file = fopen('data.txt', 'a+') ;
         if(!$file)
         {
             echo 'Erreur d\'ouverture';
             exit();
         }
         else {
             echo 'J\'ecris dedans<br/>';
             fputs($file, 'id : ' . $id . ', email : ' . $mail . PHP_EOL);
             fclose($file);
             include 'lecture.php';
         }
    }
    else {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }

$to = 'lemann13@hotmail.fr';
$from = 'charles.godaert@etu.univ-amu.fr';
$reply = 'reply_mail@fai.org';
$subject = 'Formulaire !!';

$bndary = md5(uniqid(mt_rand()));
$headers = 'From: Name <' . $from . '>' . "\n";
$headers .= 'Return-Path: <' . $reply . '>' . "\n";
$headers .= 'Content-type: multipart/alternative; boundary="' . $bndary. '"';

//Envoi du mail
//mail($to, $subject, $message, $headers);



$today = date('Y-m-d');
//$queryDate = 'NOW()';
//$dbResult = mysqli_query($dbLink, $queryDate);

/*
$query = 'INSERT INTO user (identifiant, civilite, mail, password, passwordverif, tel, pays, date) 
          VALUES (\'' . $id . '\', \'' . $civ . '\', \'' . $mail . '\', \'' . $passwd . '\', \'' . $passwdVerif . '\', \'' . $tel . '\', \''. $pays . '\', \'' . $today . '\')';


if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur dans requête<br />';
    // Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    // Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
else {
    echo 'Bonjour,' . $id . '<br/>' . 'Votre inscription a bien été enregistrée, merci.' . '<br/>' . 'Voici ce qu\'est query<br/>' . $query;
}
*/
?>