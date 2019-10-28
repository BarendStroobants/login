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
    <title>Profile</title>
</head>
<body>
<?php
$con = openConnection();

$id = $_GET['id'];

$sqlProfile = $con->prepare( 'SELECT student.id, student.username, student.avatar, student.first_name, student.last_name FROM student WHERE id = ?');

$sqlProfile->execute($id);


foreach ($con->query($sqlProfile) as $field):

?>
<h1>Profile Page</h1>
<br>
<h2><?php echo $field['username'] ?></h2>
<br>
<img src="<?php echo $field['avatar'] ?>" alt="profile picture">
<br>
<p>Welcome to your profile <?php echo $field['first_name'] . $field['last_name'] ?></p>
<br>
<a href="studentInfo.php"><button>Back To Student List</button></a>
<br>
<a href="index.php"><button>Back To Form</button></a>
<?php endforeach; ?>
</body>
</html>
