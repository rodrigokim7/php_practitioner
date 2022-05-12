<?php

$app['query']->insertData('users', [
    'name' => $_POST['name'],
    'age' => $_POST['age'],
    'city' => $_POST['city']
]);

header('Location: /');


