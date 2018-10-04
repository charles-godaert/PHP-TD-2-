<?php
    $var1 = 6;
    $var2 = 1.3;
    $var3 = 'Variable 3';
    $jour = date('d/m/Y');
    $jourFr = date('d F Y');
?>


<?php start_page('Test'); ?>

<?php
    echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
    echo 'C\'est pas mal non ? <br/>';
?>
    <hr/><br/><strong>Test</strong><br/><hr/>

<?php echo "$var1 + $var2" . '<br>';
    echo '<p>' .($var1 + $var2). '</p>';
    echo '<p>' .($var1 + $var3) . '</p>';
    echo '<p>' . $jour . '</p>';
    echo '<p>' . $jourFr . '</p>';
?>



<?php end_page() ?>