<?php
include 'db.php';
if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    $sql = "INSERT INTO tasks (task, status) VALUES ('$task', 'pending')";
    mysqli_query($conn, $sql);
}
?>
<form method="POST">
    <input type="text" name="task" required placeholder="Enter task">
    <button type="submit" name="submit">Add Task</button>
</form>


<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM tasks");
while ($row = mysqli_fetch_assoc($result)) {
    echo "{$row['task']} - {$row['status']} 
    <a href='edit.php?id={$row['id']}'>Edit</a> 
    <a href='delete.php?id={$row['id']}'>Delete</a><br>";
}
?>
