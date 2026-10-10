
<?php
include "db.php";

$message = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $email = $_POST['email'];
    $section = $_POST['section'];
    $semester = $_POST['semester'];
    $event = $_POST['event'];

    $sql = "INSERT INTO registrations
    (student, student_id, email, section, semester, event_name)
    VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param(
        $stmt, "ssssss",
        $name, $student_id, $email,
        $section, $semester, $event
    );

    if (mysqli_stmt_execute($stmt)) {
        $message = "Registration Successful!";
    } else {
        $message = "Registration Failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

<div class="container">
    <h1>College Event Registration</h1>

    <form method="post">
        <label>Full Name</label>
        <input type="text" name="name" placeholder="Enter your name" required>

        <label>Student ID</label>
        <input type="text" name="student_id" placeholder="Enter student ID" required>

        <label>Gmail</label>
        <input type="email" name="email" placeholder="Enter your Gmail" required>

        <label>Section</label>
        <select name="section" required>
            <option value="">Select Section</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
        </select>

        <label>Semester</label>
        <select name="semester" required>
            <option value="">Select Semester</option>
            <option>1st Semester</option>
            <option>2nd Semester</option>
            <option>3rd Semester</option>
            <option>4th Semester</option>
            <option>5th Semester</option>
            <option>6th Semester</option>
            <option>7th Semester</option>
            <option>8th Semester</option>
        </select>

        <label>Select Event</label>
        <select name="event" required>
            <option value="">Select Event</option>
            <option>Tech Fest</option>
            <option>Cultural Fest</option>
            <option>Sports Day</option>
        </select>

        <button type="submit" name="submit">Register Now</button>

        <p><?php echo htmlspecialchars($message); ?></p>
    </form>

    <a href="index.php">Home</a>
    <a href="admin.php">Admin Panel</a>
</div>

</body>
</html>
