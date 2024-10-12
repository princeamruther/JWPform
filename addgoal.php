<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Goal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Add a New Goal</h1>
    </header>

    <main>
        <form method="POST" action="addgoal.php">
            <label for="goal">Your Goal:</label>
            <input type="text" id="goal" name="goal" required>
            <button type="submit" name="submit">Add Goal</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $goal = $conn->real_escape_string($_POST['goal']);
            $sql = "INSERT INTO bucket_list (goal) VALUES ('$goal')";

            if ($conn->query($sql) === TRUE) {
                echo "New goal added successfully!";
                header("Location: bucketlist.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Bucket List App</p>
    </footer>
</body>
</html>
