<?php

$users = App::get('database')->selectAll('users');

require 'view/index.view.php';

