<?php
$conn = new mysqli("localhost","root","","todolist");
 if ($conn -> connect_error) {
    die ("connection failed" . $conn->connect_error); 
 }

 if (isset($_POST['addTask'])) {
    $task = $_POST['task'];
    echo $task;
    $conn -> query('INSERT INTO task (task) VALUES ("'.$task.'")');
    header('location: index.php');
 }
 if (isset($_GET ['delete'])) {
    $id = $_GET['delete'];
    $conn -> query("DELETE FROM task WHERE id='.$id'");
    header('location: index.php');
 }

 if (isset($_GET ['complete'])) {
    $id = $_GET['complete'];
    $conn -> query("UPDATE task SET status = 'completed'  WHERE id= '$id'");
    header('location: index.php');
 }

 $result = $conn -> query("SELECT * FROM task ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    
</body>
</html>