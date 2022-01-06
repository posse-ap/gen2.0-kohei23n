<?php

require('dbconnect.php');


// URLからIDを取得
$id = $_GET['id'];

// title表示用
$big_questions_stmt = $db->prepare("SELECT * FROM big_questions WHERE id = ?");
$big_questions_stmt->execute(array($id));
$big_questions_results = $big_questions_stmt->fetch();


// 画像 & 問題番号表示用
$questions_stmt = $db->prepare("SELECT * FROM questions WHERE big_question_id = ?");
$questions_stmt->execute(array($id));
$questions_results = $questions_stmt->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $big_questions_results['name'] ?></title>
  <link rel="stylesheet" href="chimei.css">
</head>

<body>
  <div class="qDiv">
  <?php foreach ($questions_results as $question_result) : ?>

    <h1 class="nameunderline"><?= $question_result['id'] ?>.この地名はなんて読む？</h1>
    <img src="img/<?= $question_result['image'] ?>" alt="">

    <ul>
      <?php  
      // 選択肢表示用
      $choices_stmt = $db->prepare("SELECT * FROM choices WHERE question_id = ?");
      // 
      $choices_stmt->execute(array($question_result['id']));
      $choices_results = $choices_stmt->fetchAll();
      foreach ($choices_results as $choices_result) :
      ?>

      <li class="q"><?= $choices_result['name'] ?></li>
      <?php endforeach; ?>
    </ul>




  <?php endforeach; ?>