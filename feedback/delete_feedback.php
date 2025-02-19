<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM feedback WHERE id = $id";
    
    if (mysqli_query($conn, $query)) {
        echo "Feedback deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "No ID provided for deletion.";
}

// Redirect back to view_feedback.php
header("Location: view_feedback.php");
exit();
?>