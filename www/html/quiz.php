<?php

require('dbconnect.php');

// URLからIDを取得
$id = $_GET['id'];


// title表示用
$title_stmt = $db->prepare("SELECT * FROM big_questions WHERE id = ?");
$title_stmt->execute(array($id));
$title = $title_stmt->fetch();


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
  <title><?= $title['name'] ?></title>
  <link rel="stylesheet" href="chimei.css">
</head>

<body>
  <div class="qDiv">
  <?php foreach ($questions_results as $question_result) : ?>

    <h1 class="nameunderline"><?= $question_result['id'] ?>.この地名はなんて読む？</h1>
    <img src="img/<?= $question_result['image'] ?>" alt="">

    <ul class="ul" id="question<?= $question_result['id']; ?>_choices">
      <?php  
      // 選択肢表示用
      $choices_stmt = $db->prepare("SELECT * FROM choices WHERE question_id = ?");
      $choices_stmt->execute(array($question_result['id']));
      $choices = $choices_stmt->fetchAll();
      // 正解の選択肢表示用
      $answer_stmt = $db->prepare("SELECT * FROM choices WHERE question_id = ? AND valid = 1");
      $answer_stmt->execute(array($question_result['id']));
      $answer = $answer_stmt->fetch();
      ?>

      <?php 
      // foreach に埋め込む前に配列をシャッフル
      // 正誤判定 trial & error について
        // $choice['id'] を使うと配列の要素ごと順番がシャッフルされてしまい、上から 1, 2, 3 にはならない。でもそれでもいけるかも？
      shuffle($choices); 
      foreach ($choices as $choice) :
      ?>

      <li class="q" 
        id="question<?= $question_result['id']; ?>_choice<?= $choice['id']; ?>" 
        onclick="clickfunction(<?= $question_result['id']; ?>, <?= $choice['id']; ?>, <?= $answer['id']; ?>)"
      >
        <?= $choice['name'] ?>
      </li>

      <?php endforeach; ?>
    </ul>

    <div class="ansarea" id="correct_box<?= $question_result['id']; ?>">
      <p class="c_ansmsg">正解！</p>
      <p class="ansexp">正解は「<?= $answer['name'] ?>」です！</p>
    </div>

    <div class="ansarea" id="wrong_box<?= $question_result['id']; ?>">
      <p class="w_ansmsg">不正解！</p>
      <p class="ansexp">正解は「<?= $answer['name'] ?>」です！</p>
    </div>




  <?php endforeach; ?>

  <script src="chimei.js"></script>
</body>