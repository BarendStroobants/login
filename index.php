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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $connection = openConnection();
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $email = $_POST['email'];
    $preferredLanguage = $_POST['preferred_language'];
    $avatar = $_POST['avatar'];
    $video = $_POST['video'];
    $quote = $_POST['quote'];
    $quoteAuthor = $_POST['quote_author'];


    $sqlCmd = 'INSERT INTO student (first_name, last_name, username, gender, linkedin, github, email, 
                 preferred_language, avatar, video, quote, quote_author, created_at) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,now())';
    $connection->prepare($sqlCmd)->execute([$firstName, $lastName, $username, $gender, $linkedin, $github, $email, $preferredLanguage, $avatar,
        $video, $quote, $quoteAuthor]);

}
