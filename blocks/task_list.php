<?php require_once '../connect.php';  ?>
<?php $title = 'Мои задачи'; ?>
<?php $link = 'href="../css/style.css"'; ?>
<?php require_once '../blocks/head.php'; ?>

<div class="container">
    <h1>Мои дела</h1>
    <ul class="list-group">
        <?php require_once '../task_list_add.php'; ?>
    </ul>

    <?php 
        if(isset($_SESSION['message'])) {
            echo '<p class="error-msg">' . $_SESSION['message'] . '</p>';
            unset($_SESSION['message']);
        }
    ?>

    <div class="link">
        <a href="../index.php" class="task-link">Ввести задачу</a>
    </div>
</div>

<?php require_once '../blocks/foot.php'; ?>