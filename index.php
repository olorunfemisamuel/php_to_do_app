<?php 
include("add.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>What do you want to do today?</h1>
<div class="container">

    <!-- Form for Adding a New Task -->
<form action="add.php" method="post">
    <input type="text" id="search" name="task" placeholder="Add Task" required>
    <button type="submit" name="addTask">Add Task</button>
</form>


<!-- List of Tasks -->
<ul>
    <?php while ($row = $result->fetch_assoc()): ?>
        <li class="<?php echo $row['status']; ?>">
            <strong><?php echo $row['task']; ?></strong>
            <div class="actions">
                <a href="index.php?complete=<?php echo $row['id'];?>">complete</a>
                <a href="index.php?delete=<?php echo $row['id'];?>">delete</a>
            </div>
        </li>
        <?php endwhile; ?> 
</ul>
</div>

</body>
</html> 