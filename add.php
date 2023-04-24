<?php

    require_once 'connect.php';


    $task = $_POST['task'];
    if(empty($task)) {

        $_SESSION['message'] = 'Введите задачу';
        header("Location: index.php");
        
    } else {    

        $sql = "INSERT INTO tasks(task) VALUES(:task)";
        $query = $pdo->prepare($sql);
        $query->execute( ['task' => $task] );

        $_SESSION['message'] = 'Задача записана';
        header("Location: index.php");

    }
