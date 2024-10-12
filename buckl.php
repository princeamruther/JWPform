<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucket List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>My Bucket List</h1>
        <a href="addgoal.php" class="add-goal">+ Add New Goal</a>
    </header>

    <main>
        <ul id="bucket-list">
            <?php
            // Fetch goals from the database
            $sql = "SELECT id, goal FROM bucket_list";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data for each row
                while($row = $result->fetch_assoc()) {
                    echo "<li>" . htmlspecialchars($row["goal"]) . " <a href='delete.php?id=" . $row["id"] . "'>Remove</a></li>";
                }
            } else {
                echo "<li>No goals found</li>";
            }
            ?>
        </ul>
    </main>

    <footer>
        <p>&copy; 2024 Bucket List App</p>
    </footer>
</body>
</html>
