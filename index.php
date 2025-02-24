<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Todo List</h1>
<input type="text" id="search" name="search" placeholder="Add Task">
<label for = "search"></label>
<button type="submit" name="submit">Add Task</button>

<section class="container">
    <ul>
        <li>
            <input type="checkbox" id="task1">
            <label for="task1">Go to the supermarket</label><button type="submit" name="submit">Delete</button>
        </li>
        <li>
            <input type="checkbox" id="task2">
            <label for="task2">Pick up food</label><button type="submit" name="submit">Delete</button>
        </li>
        <li>
            <input type="checkbox" id="task3">
            <label for="task3">Call Samuel</label><button type="submit" name="submit">Delete</button>
        </li>
        <li>
            <input type="checkbox" id="task4">
            <label for="task4">Download a movie on Netflix</label><button type="submit" name="submit">Delete</button>
        </li>
    </ul>
</section>

</body>


</html> 