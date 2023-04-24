<?php 
require_once 'connect.php';

$query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');


while($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo '<li class="list-group-item"><b>' . $row->task . 
    '</b> <a href="../delete.php?id=' .$row->id. '"> <button class="btn-delete">Удалить</button> </a> </li>';
}