<?php

require 'connection.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['last_name'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$linkedin = $_POST['linkedin'];
$github = $_POST['github'];
$preferred_language = $_POST['preferred_language'];
$avatar = $_POST['avatar'];
$video = $_POST['video'];
$quote = $_POST['quote'];
$quote_author = $_POST['quote_author'];
$created_at = $_POST['created_at'];


if (isset($_POST ['firstname'], $_POST ['last_name'], $_POST['username'], $_POST ['gender'], $_POST ['email'], $_POST ['linkedin'], $_POST ['github'], $_POST ['preferred_language'], $_POST ['avatar'], $_POST ['video'], $_POST ['quote'], $_POST ['quote_author'], $_POST ['created_at'])) {
    $data = openConnection()->prepare("INSERT INTO students (first_name) VALUES (:first_name, :last_name, :username, :gender, :email, :linkedin, :github, :preferred_language, :avatar, :video, :quote, :quote_author, :created_at)");
    $data->bindParam(':first_name', $firstname);
    $data->bindParam(':last_name', $lastname);
    $data->bindParam(':username', $username);
    $data->bindParam(':gender', $gender);
    $data->bindParam(':email', $email);
    $data->bindParam(':linkedin', $linkedin);
    $data->bindParam(':gituhb', $github);
    $data->bindParam(':preferred_language', $preferred_language);
    $data->bindParam(':avatar', $avatar);
    $data->bindParam(':video', $video);
    $data->bindParam(':quote', $quote);
    $data->bindParam(':quote_author', $quote_author);
    $data->bindParam(':created_at', $created_at);


    $data->execute();

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input placeholder="First name" name="first_name"><br>
    <input placeholder="Last name" name="lastname"><br>
    <input placeholder="User name" name="username"><br>
    <input placeholder="Gender" name="gender"><br>
    <input placeholder="Email" name="email"><br>
    <input placeholder="Linkedin" name="linkedin"><br>
    <input placeholder="Github" name="github"><br>
    <input placeholder="Language" name="preferred_language"><br>
    <input placeholder="Avatar" name="avatar"><br>
    <input placeholder="Video" name="video"><br>
    <input placeholder="Quote" name="quote"><br>
    <input placeholder="Quote Author" name="quote_author"><br>
    <input type="date" placeholder="Created at" name="created_at"><br>


    <button name="submit" type="submit">submit</button>
</form>
</body>
</html>
