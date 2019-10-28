<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="insert.css">
    <title>Form</title>
</head>
<body>

<h1>Student-Book (atw-lamarr-2-13 / 2019)</h1>

<form method="POST">
    <label for="first_name">First name:</label>
    <input type="text" name="first_name">
    <hr>
    <br>
    <label for="last_name">Last name:</label>
    <input type="text" name="last_name">
    <hr>
    <br>
    <label for="username">Username:</label>
    <input type="text" name="username">
    <hr>
    <br>
    <label for="gender">Gender:</label>
    <select name="gender">
        <option value="m">Male</option>
        <option value="f">Female</option>
    </select>
    <hr>
    <br>
    <label for="linkedin">LinkedIn:</label>
    <input type="text" name="linkedin">
    <hr>
    <br>
    <label for="github">Github:</label>
    <input type="text" name="github">
    <hr>
    <br>
    <label for="email">Email:</label>
    <input type="text" name="email">
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
    </select>
    <hr>
    <br>
    <label for="avatar">Avatar:</label>
    <input type="text" name="avatar">
    <hr>
    <br>
    <label for="video">Video:</label>
    <input type="text" name="video">
    <hr>
    <br>
    <label for="quote">Quote:</label>
    <input type="text" name="quote">
    <hr>
    <br>
    <label for="quote_author">Quote author:</label>
    <input type="text" name="quote_author">
    <hr>
    <br>
    <button>submit</button>
</form>
<br>
<a href="studentInfo.php"><button>See Info</button></a>

</body>
</html>
