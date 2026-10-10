
<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM registrations");
?>

<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<h1>Student Registrations</h1>

<table border="1" align="center">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Event</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['student']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['event_name']."</td>";
    echo "</tr>";
}
?>

</table>

<br>
<a href="index.html">Home</a>

</body>
</html>
