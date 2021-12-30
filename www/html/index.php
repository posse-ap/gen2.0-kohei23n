<?php
require('quiz.php');


// title表示用
// big_questions テーブルから '東京の難読地名クイズ'、'広島県の難読地名クイズ'をそれぞれ取得
// WHERE で一つだけ取得すると、foreach() で書いても大丈夫
$sql1 = "SELECT * FROM big_questions WHERE id = 1";
$sql2 = "SELECT * FROM big_questions WHERE id = 2";

// 上で定義した変数に対し処理
$stmt1 = $db->query($sql1);
$stmt2 = $db->query($sql2);




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
    <?php foreach ($stmt1 as $row1) : ?>
      <title>ガチで東京の人しか解けない！＃<?php echo $row1['name']; ?></title>
    <?php endforeach; ?>

  <?php elseif (strstr($url, '2')): ?>
    <?php foreach ($stmt2 as $row2) : ?>
      <title>ガチで東京の人しか解けない！＃<?php echo $row2['name']; ?></title>
    <?php endforeach; ?>

  <?php endif; ?>
  <link rel="stylesheet" href="chimei.css">
</head>

<body>
  <div id="quizContainer" class="container">
    <div class="qDiv">
      <h1 class="nameunderline">hello</h1>
    </div>



  </div>



 <script src="chimei.js"></script>
</body>

</html>


