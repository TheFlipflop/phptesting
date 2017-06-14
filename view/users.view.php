<?php include('view/partials/head.php') ?>

<h1>Users</h1>

<?php foreach ($users as $user) : ?>
    <li>
        <?= $user->name; ?>
    </li>
<?php endforeach; ?>

<h1>Submit your name </h1>

    <form method="POST" action="/learn/users">
        <input name="name" type="text"></input>

        <button type="submit">Submit</button>
    </form>
<?php include('view/partials/footer.php') ?>