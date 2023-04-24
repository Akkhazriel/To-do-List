<?php require_once 'connect.php';  ?>
<?php $title = 'To-do Лист'; ?>
<?php $link = 'href="css/style.css"'; ?>
<?php require_once 'blocks/head.php'; ?>
    


    <div class="container">
        <h1>Список дел</h1>
        <form action="add.php" method="post">
            <input type="text" name="task" id="task" placeholder="Нужно сделать.." class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
        </form>

        <?php 
            if(isset($_SESSION['message'])) {
                echo '<p class="error-msg">' . $_SESSION['message'] . '</p>';
                unset($_SESSION['message']);
            }
        ?>

        <div class="link">
            <a href="../POD/blocks/task_list.php" class="task-link">Мои задачи</a>
        </div>
    </div>

<?php require_once 'blocks/foot.php'; ?>