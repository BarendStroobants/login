<?php

require 'connection.php';
require 'whatIsHappening.php';
require 'insert.php';

session_start();

whatIsHappening();

$con = openConnection();

