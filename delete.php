<?php
  $pdo = new PDO('mysql:host=localhost;dbname=db', 'root', '');
  $id = $_GET['id'];

  $sql = 'DELETE FROM tasks WHERE `id` = :id ';
  $query = $pdo->prepare($sql);
  $query->execute(['id' => $id]);

  header('Location: /');
?>
