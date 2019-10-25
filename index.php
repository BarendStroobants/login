<?php

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'connection.php';
require 'whatIsHappening.php';
require 'insert.php';

session_start();

whatIsHappening();

$con = openConnection();

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $connection = openConnection();
    $firstName = $_GET['first_name'];
    $lastName = $_GET['last_name'];
    $username = $_GET['username'];
    $gender = $_GET['gender'];
    $linkedin = $_GET['linkedin'];
    $github = $_GET['github'];
    $email = $_GET['email'];
    $preferredLanguage = $_GET['preferred_language'];
    $avatar = $_GET['avatar'];
    $video = $_GET['video'];
    $quote = $_GET['quote'];
    $quoteAuthor = $_GET['quote_author'];


    $sqlCmd = 'INSERT INTO student (first_name, last_name, username, gender, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,now())';
    $connection->prepare($sqlCmd)->execute([$firstName, $lastName, $username, $gender, $linkedin, $github, $email, $preferredLanguage, $avatar,
        $video, $quote, $quoteAuthor]);

}
