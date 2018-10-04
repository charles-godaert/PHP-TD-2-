<?php
    require 'FctionsStartEnd.php';
    start_page('Calculator');

    $operateurs = '*+-/';

    echo '<form action="calcul.php" method="post">
        <input type="number" name="op1" />
        <input type="number" name="op2" /><br><br>';

    for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
    {
        echo '<input ';
        if($cpt == 0)
        {
            echo 'checked="checked" ';
        }
        echo 'type="submit" name="action" value="' . $operateurs[$cpt] . '"/>';
    }
    echo '<input type="reset" name="demete" value="Reset"/<br/>
    </form>';
end_page();
?>


<!--
    <input checked="checked" type="radio" name="op" value="*"/>*<br/>
    <input type="radio" name="op" value="+"/>+<br/>
    <input type="radio" name="op" value="-"/>-<br/>
    <input type="radio" name="op" value="/"/>/<br/>
->>





