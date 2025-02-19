<?php
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tasks WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $task = $_POST['task'];
    $status = $_POST['status'];
    mysqli_query($conn, "UPDATE tasks SET task='$task', status='$status' WHERE id=$id");
    header("Location: index.php");
}
?>

<form method="POST">
    <input type="text" name="task" value="<?= $row['task'] ?>">
    <select name="status">
        <option value="pending" <?= $row['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
        <option value="done" <?= $row['status'] == 'done' ? 'selected' : '' ?>>Done</option>
    </select>
    <button type="submit" name="update">Update</button>
</form>
