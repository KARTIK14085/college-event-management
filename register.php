
<?php
include "db.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $event = $_POST['event'];

    $sql = "INSERT INTO registrations
            (student, email, event_name)
            VALUES ('$name', '$email', '$event')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration Successful!";
    } else {
        echo "Registration Failed!";
    }
}
?>

<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Student Registration</h1>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>

    Event:
    <select name="event">
        <option>Tech Fest</option>
        <option>Cultural Fest</option>
        <option>Sports Day</option>
    </select><br><br>

    <button name="submit">Register</button>
</form>

<a href="index.html">Home</a>

</body>
</html>
