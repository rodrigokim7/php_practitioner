<?php require 'partials/header.php'; ?>     

<?php foreach ($users as $user): ?>
  <li><?= $user->name ?></li>
  <li><?= $user->age ?></li>
  <li><?= $user->city ?></li>
<?php endforeach; ?>

<h1>Input Your Name, age, city where you live !</h1>

<form method="POST" action="/names">
    <input name="name" type="text" placeholder="name"><br><br>
    <input type="number" name="age" placeholder="age" id="age" min="1" max="100"><br><br>
    <input type="text" name="city" id="city" placeholder="city"><br><br>
    <button type="submit">Submit</button>
</form>

<?php require 'partials/footer.php'; ?>

