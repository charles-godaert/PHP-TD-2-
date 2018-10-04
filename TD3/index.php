<?php
include "FctionsStartEnd.php";

start_page('Formulaire');

echo '<form action="data-processing.php" method="post">
        <input type="text" name="id"/>Identifiant<br/>
        <input type="radio" name="civilite" value="H" checked/>Homme
        <input type="radio" name="civilite" value="F"/>Femme<br/>
        
        <input type="text" name="email"/>E-mail<br/>
        <input type="password" name="passwd"/>Password<br/>
        <input type="password" name="passwdVerif"/>Password Verif<br/>
        <input type="text" name="tel"/>Telephone<br/>
        <select name="pays">
            <option value="Belgique">Belgique</option>
            <option value="France">France</option>
            <option value="Uruguay">Uruguay</option>
        </select><br/>
        <input type="checkbox" name="check"/>Accepter conditions<br/>
        <input type="submit" name="action" value="mailer"/>
        <input type="submit" name="action" value="rec"/>
    </form>';

end_page();
?>









