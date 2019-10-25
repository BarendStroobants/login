<?php

function writeAway(){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $con = openConnection();
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
        $statement = $con->prepare ('INSERT INTO student (first_name, last_name, username, gender, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES (:first_name,:last_name,:username,:gender,:linkedin,:github,:email,:preferred_language,:avatar,:video,:quote,:quote_author)');

        try {
            $var = $statement->execute([$firstName, $lastName, $username, $gender, $linkedin, $github, $email,$preferredLanguage, $avatar, $video, $quote, $quoteAuthor]);
            echo $var;
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

    }
}