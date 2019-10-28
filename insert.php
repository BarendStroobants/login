<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css/insert.css">
    <title>Form</title>
</head>
<body>

<h1>Student-Book (atw-lamarr-2-13 / 2019)</h1>

<form method="POST">
    <input type="text" name="first_name" placeholder="Pleas enter first name">
    <hr>
    <br>
    <input type="text" name="last_name" placeholder="Pleas enter last name">
    <hr>
    <br>
    <input type="text" name="username" placeholder="Pleas enter user name">
    <hr>
    <br>
    <label for="gender">Gender:</label>
    <select name="gender">
        <option value="m">Male</option>
        <option value="f">Female</option>
    </select>
    <hr>
    <br>
    <input type="text" name="linkedin" placeholder="pleas enter url link to linkedin">
    <hr>
    <br>
    <input type="text" name="github" placeholder="Pleas enter url link to Github">
    <hr>
    <br>
    <input type="text" name="email" placeholder="Pleas enter email">
    <hr>
    <br>
    <label for="preferred_language">Preferred language:</label>
    <select name="preferred_language">
        <option value="nl">Nederlands</option>
        <option value="en">Englisch</option>
        <option value="fr">Francais</option>
        <option value="de">Deutsch</option>
        <option value="es">Espanol</option>
        <option value="ar">Arabic</option>
        <option value="ko">Korean</option>
        <option value="it">Italian</option>
    </select>
    <hr>
    <br>
    <input type="text" name="avatar" placeholder="Pleas enter url link to avatar">
    <hr>
    <br>
    <input type="text" name="video" placeholder="Pleas enter url link to Youtube video">
    <hr>
    <br>
    <input type="text" name="quote" placeholder="Pleas enter a quote">
    <hr>
    <br>
    <input type="text" name="quote_author" placeholder="Who wrote the quote">
    <hr>
    <br>
    <button>submit</button>
</form>
<br>
<a href="studentInfo.php"><button>See Info</button></a>

</body>
</html>
