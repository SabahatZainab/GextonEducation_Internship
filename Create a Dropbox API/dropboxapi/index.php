<?php
require 'app/start.php';
require 'app/dropbox_auth.php';

var_dump($client->getAccountInfo());
$client->getFile('/photo.jpg',fopen('files/photo.jpg','wb'));

echo '<pre>', print_r($client->getMetadataWithChildren('/test')),'</pre>';



?>