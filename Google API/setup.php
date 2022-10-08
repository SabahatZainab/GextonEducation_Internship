<?php
    require_once('vendor/autoload.php');
    $google = new Google_Client();

    $google->setClientId('14296755586-gpttmbavsfv7rdh5tkgctsureufp05b3.apps.googleusercontent.com');

    $google->setClientSecret('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');

    $google->setRedirectUri('http://localhost/GextonInternship/Task7_googleapi/profile.php');

    $google->addScope('email');

    $google->addScope('profile');

    session_start();
?>