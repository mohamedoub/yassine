<?php
require_once "../core/classes/autoloader.class.php";
require_once "../config/config.php";
Autoloader::register();
$us = new users('admin', 'mohamed', 'support@oubaha.com', 'password', '1', 'img.png');
$us->addUser();

