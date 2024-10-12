<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM bucket_list WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: bucketlist.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
