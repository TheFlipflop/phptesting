<?php include('view/partials/head.php') ?>

    <h1>Task for the day</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else: ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>

    </ul>

<?php include('view/partials/footer.php') ?>