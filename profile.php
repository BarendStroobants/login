<?php
require 'connection.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="profile.css">
    <title>Profile</title>
</head>
<body>
<?php
$con = openConnection();

$id = $_GET['user'];

$sqlProfile = $con->prepare( 'SELECT * FROM student WHERE ID=:id');

$sqlProfile->execute(['id'=>$id]);

$user=$sqlProfile->fetch()

?>
<h1>Profile Page</h1>
<br>
<h2>ID: <?php echo $user['id'] ?></h2>
<br>
<h2>User: <?php echo $user['username'] ?></h2>
<br>
<img src="<?php echo $user['avatar'] ?>" alt="profile picture">
<br>
<p>Welcome to your profile <?php echo $user['first_name'] . ' ' . $user['last_name'] ?></p>
<br>
<h2>Youtube:</h2>
<!-- TODO: make youtube video show on page -->
<iframe width="560" height="315" src="<?php $user['video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>
<a href="<?php echo $user['linkedin'] ?>"><button>Find me @ LinkedIn</button></a>
<br>
<a href="<?php echo $user['github'] ?>"><button>Find me @ Github</button></a>
<br>
<p>send me an email at: <?php echo $user['email'] ?></p>
<br>
<p>your preferred language is: <?php echo $user['preferred_language'] ?></p>
<br>
<quote>Quote: <?php echo $user['quote'] ?></quote>
<br>
<quote>Quote author: <?php echo $user['quote_author'] ?></quote>
<br>
<a href="studentInfo.php"><button>Back To Student List</button></a>
<br>
<a href="index.php"><button>Back To Form</button></a>

</body>
</html>
