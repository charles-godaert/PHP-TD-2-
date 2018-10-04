<?php
    require 'FctionsStartEnd.php';
    start_page('Ma Calculette PHP du Futur');

    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $action = $_POST['action'];

    if('*' == $action)
    {
        $result = $op1 * $op2;
    }

    elseif('+' == $action)
    {
        $result = $op1 + $op2;
    }

    elseif('-' == $action)
    {
        $result = $op1 - $op2;
    }

    elseif('/' == $action)
    {
        $result = $op1 / $op2;
    }

    else
    {
        echo '<br/><strong>opérateur ' . $action . ' non géré </strong>';
    }

    echo $op1 . $action .  $op2 . ' = ' . $result;
?>
