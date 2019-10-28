<?php

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'connection.php';
require 'quepasaMoufasa.php';
require 'writeAway.php';
require 'insert.php';

session_start();

//quepasaMoufasa();

writeAway();