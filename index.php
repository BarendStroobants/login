<?php

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'connection.php';
require 'whatIsHappening.php';
require 'insert.php';
require 'writeAway.php';

session_start();

whatIsHappening();

writeAway();