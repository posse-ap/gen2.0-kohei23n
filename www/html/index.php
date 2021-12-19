<?php
require('quiz.php');

$sql1 = "SELECT * FROM big_questions WHERE id = 1";
$sql2 = "SELECT * FROM big_questions WHERE id = 2";

$stmt1 = $db->query($sql1);
$stmt2 = $db->query($sql2);


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
    <?php foreach ($stmt1 as $row1) : ?>
    <p>
      <a href="/quiz?question_id=<?php echo $row1['id']; ?>"><?php echo $row1['id'] . '：' . $row1['name']; ?></a>
    </p>
    <?php endforeach; ?>
  <?php elseif (strstr($url, '2')): ?>
    <?php foreach ($stmt2 as $row2) : ?>
    <p>
      <a href="/quiz?question_id=<?php echo $row2['id']; ?>"><?php echo $row2['id'] . '：' . $row2['name']; ?></a>
    </p>
    <?php endforeach; ?>
  <?php endif; ?>






  


  


  
  



</body>

</html>


