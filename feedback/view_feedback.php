<?php
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM feedback ORDER BY feedback_date DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Feedback</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

<h2>All Feedback</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Feedback</th>
        <th>Date</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['message']; ?></td>
        <td><?php echo $row['feedback_date']; ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
