<?php
// var_dump($_GET);
// exit();


$id = $_GET['id'];

include('functions.php'); // 関数を記述したファイルの読み込み
$pdo = connect_to_db(); // 関数実行

$sql = 'SELECT * FROM todo_table3 WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
  // var_dump($record);
  // exit();
}



?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型todoリスト（編集画面）</title>
</head>

<body>
  <form action="todo_update.php" method="POST">
    <fieldset>
      <legend>過去の投稿を修正（編集画面）</legend>
      <a href="todo_input_read.php">一覧画面</a>
      <div>
      動画タイトル: <input type="text" name="movie_title" value="<?= $record['movie_title']?>">
      </div>
      <div>
      投稿日: <input type="date" name="posted_date" value="<?= $record['posted_date'] ?>">
      </div>
      <div>
      ジャンル: <input type="text" name="genre" value="<?= $record['genre'] ?>">
      </div>
      <div>
      相談内容: <input type="text" name="content" value="<?= $record['content'] ?>">
      </div>
      <div>
      <div>
        <input type="hidden" name="id" value="<?= $record['id']?>">
      </div>
        <button>submit</button>
      </div>

    </fieldset>
  </form>

</body>

</html>