<?php
include 'db.php';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    $query = "UPDATE feedback SET name = '$name', message = '$message' WHERE id = $id";
    
    if (mysqli_query($conn, $query)) {
        echo "Feedback updated successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Fetch feedback to update
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM feedback WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    echo "No ID provided for update.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Feedback</title>
</head>
<body>
    <h1>Update Feedback</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        Feedback: <textarea name="message" required><?php echo $row['message']; ?></textarea><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>