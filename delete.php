<?php 
    require_once 'connect.php';

    $id = $_GET['id'];

    $sql = 'DELETE FROM `tasks` WHERE `id` = ?';
    $query = $pdo->prepare($sql);
    $query->execute( [$id] );

    header("Location: blocks/task_list.php");
    $_SESSION['message'] = 'Задача удалена';
?>