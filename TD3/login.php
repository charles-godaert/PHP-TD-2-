<?php
include "FctionsStartEnd.php";
include "base.php";

$step = $_GET['step'];
if($step == null) {
    header('Location: login.php?step=LOGIN');
}
echo $step;


$PageAccueil = 'PageAccueil';
$PageAccueilAdr = 'login.php';

echo '<form action="test-pass.php" method="post">
        <input type="text" name="login"/><br/>
        <input type="password" name="mdp"/><br/>
        <a href=\'test-pass.php\'><input type="submit" name="actionOfValider" value="Valider"/></a>
    </form>';
end_page();

?>



