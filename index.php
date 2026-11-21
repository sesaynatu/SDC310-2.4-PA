<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taphanatu Sesay Wk 2 Performance Assessment</title>
</head>
<body>
  <h1>Taphanatu Sesay Wk 2 Performance Assessment</h1>  

<form method="POST">
<label for="name">Enter your name:</label>
<input type="text" id="name" name="name">
<br><br>
<label for="dob">Enter your date of birth:</label>
<input type="date" id="dob" name="dob">
<br><br>
<label for="color">Enter your favorite color:</label>
<input type="text" id="color" name="color">

<br><br>
<label for="place">Enter your favorite place to visit:</label>
<input type="text" id="place" name="place">

<br><br>
<label for="nickname">Enter your nickname:</label>
<input type="text" id="nickname" name="nickname">

<br><br>
<input type="submit" value="Submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name = $_POST['name'] ?? '';
$dob = $_POST['dob'] ?? '';
$color = $_POST['color'] ?? '';
$place = $_POST['place'] ?? '';
$nickname = $_POST['nickname'] ?? '';
if ($name !== '') {
    echo "<p>The name you entered is: " . htmlspecialchars($name) . "</p>";
} else {
    echo "<p>You didn't enter your name!</p>";
}
if ($dob !== '') {
 echo "<p>The birthdate you gave is: " . htmlspecialchars($dob) . "</p>";   
} else {
    echo "<p>You didn't enter your birthdate!</p>";
}

if ($color !== '') {
    
    echo "<p>Your favorite color is: " . htmlspecialchars($color) . "</p>";
} else {
    echo "<p>You didn't enter your favorite color!</p>";
}
if ($place !== '') {
    echo "<p>Your favorite place to visit is: " . htmlspecialchars($place) . "</p>";
} else {
    echo "<p>You didn't enter your favorite place!</p>";
}
if ($nickname !== '') {
    echo "<p>Your nickname is: " . htmlspecialchars($nickname) . "</p>";
} else {
    echo "<p>You didn't enter your nickname!</p>";
}

}
?>
</body>
</html>

