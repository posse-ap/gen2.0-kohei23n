<?php
require('quiz.php');


// title表示用
// big_questions テーブルから '東京の難読地名クイズ'、'広島県の難読地名クイズ'をそれぞれ取得
// WHERE で一つだけ取得すると、foreach() で書いても大丈夫
$id1 = "SELECT * FROM big_questions WHERE id = 1";
$id2 = "SELECT * FROM big_questions WHERE id = 2";

// 上で定義した変数に対し処理
$big_questions_stmt1 = $db->query($id1);
$big_questions_stmt2 = $db->query($id2);


// 画像 $ 問題番号表示用

// URLからIDを取得
$id = $_GET['id'];
// questions テーブルから、big_question_idが１の場合は高輪と亀戸、2の場合は向洋の画像を取得
$id_stmt = $db->prepare("SELECT * FROM questions WHERE big_question_id = ?");
$id_stmt->execute(array($id));
$id_results = $id_stmt->fetchAll();

// 選択肢表示用





?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $url = $_SERVER['REQUEST_URI'];
  if(strstr($url, '1')) : ?>
    <?php foreach ($big_questions_stmt1 as $row1) : ?>
      <title>ガチで東京の人しか解けない！＃<?= $row1['name']; ?></title>
    <?php endforeach; ?>

  <?php elseif (strstr($url, '2')): ?>
    <?php foreach ($big_questions_stmt2 as $row2) : ?>
      <title>ガチで東京の人しか解けない！＃<?= $row2['name']; ?></title>
    <?php endforeach; ?>

  <?php endif; ?>
  <link rel="stylesheet" href="chimei.css">
</head>

<body>
  <div class="qDiv">
  <?php foreach ($id_results as $id_result) : ?>

    <h1 class="nameunderline"><?= $id_result['id'] ?>.この地名はなんて読む？</h1>
    <img src="img/<?= $id_result['image'] ?>" alt="">




  <?php endforeach; ?>


      



  

      


    </div>




    


 <script src="chimei.js"></script>
</body>

</html>


