<?php include('view/partials/head.php') ?>

<?php foreach ($users as $user) : ?>
    <li>
        <?= $user->name; ?>
    </li>
<?php endforeach; ?>

<h1>Submit your name </h1>

    <form method="POST" action="/learn/names">
        <input name="name" type="text"></input>

        <button type="submit">Submit</button>
    </form>
<?php include('view/partials/footer.php') ?>