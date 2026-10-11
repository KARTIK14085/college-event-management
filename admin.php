
<?php
include "db.php";

$sql = "SELECT * FROM registrations";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<h1 style="text-align:center;">Indus Events - Admin Panel</h1>

<table border="1" align="center" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Student ID</th>
        <th>Gmail</th>
        <th>Section</th>
        <th>Semester</th>
        <th>Event</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['student']) . "</td>";
        echo "<td>" . htmlspecialchars($row['student_id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['section']) . "</td>";
        echo "<td>" . htmlspecialchars($row['semester']) . "</td>";
        echo "<td>" . htmlspecialchars($row['event_name']) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<br>
<center><a href="index.html">Home</a></center>

</body>
</html>
