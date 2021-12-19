<?php
require('quiz.php');

$stmt = $db->query('SELECT * FROM big_questions');
$big_questions = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>quizy</title>
</head>

<body>
  <?php
  $url = $_SERVER['REQUEST_URI'];
  if(strstr($url, '1')) : ?>
    <p>
      <a href="/quiz?question_id=1; ?>">1 : 東京の難読地名クイズ</a>
    </p>
  <?php elseif (strstr($url, '2')): ?>
    <p>
      <a href="/quiz?question_id=2; ?>">2 : 広島県の難読地名クイズ'; ?></a>
    </p>
  <?php endif; ?>

  



</body>

</html>


