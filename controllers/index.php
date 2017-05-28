<?php

$users = $app['database']->selectAll('users');

require 'view/index.view.php';

