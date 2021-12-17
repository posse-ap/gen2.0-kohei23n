<html lang="ja">
<head>
  <title>PHP Test</title>
</head>
<body>
  <?php

$dsn = 'mysql:host=localhost;dbname=kuizy;charset=utf8';

// データベースのユーザー名
$user = 'root';

// データベースのパスワード
$password = 'secret';

// tryにPDOの処理を記述
try {

// PDOインスタンスを生成
$dbh = new PDO($dsn, $user, $password);

// // エラー（例外）が発生した時の処理を記述
} catch (PDOException $e) {

// //   // エラーメッセージを表示させる
  echo 'データベースにアクセスできません！' . $e->getMessage();

// //   // 強制終了
  exit();

}


  ?>
</body>
</html>