<?php

$users = $app['query']->selectAll('users');

 require 'view/index.view.php';