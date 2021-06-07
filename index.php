<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include_once('classes/APPlogin.php');
    $APPlogin = new APPlogin();
    //include_once('views/header/header.php');
    $APPlogin->display();
?>



<?php
//$APPlogin->add_message('Bueno');
//$APPlogin->add_error('No bueno');
?>

<?php //include('views/footer/footer.php'); ?>