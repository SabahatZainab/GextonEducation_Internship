<?php

session_start();
$_SESSION['user_id'] = 1;
require __DIR__ . '/../lib/Dropbox/autoload.php';

$dropboxKey = 'ghbrj2cs5mijzax';
$dropboxSecret = '8mjnn3469yisqba';
$appName = 'Task_internship/1.0';

$appInfo = new Dropbox\AppInfo($dropboxKey , $dropboxSecret);

$csrfTokenStore = new Dropbox\ArrayEntryStore($_SESSION,'dropbox-auth-csrf-token');

$webAuth = new Dropbox\WebAuth($appInfo, $appName, 'http://localhost/GextonInternship/New%20Tasks/Try/dropboxapi/dropbox_finish.php',$csrfTokenStore);


$db = new PDO('mysql:host=localhost;dbname=task14','root','');
$user = $db-> prepare("SELECT * FROM `users` WHERE id = :user_id");
$user -> execute(['user_id' => $_SESSION['user_id']]);
$user = $user->fetchObject();


?>