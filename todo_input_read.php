<?php

// 呼び出し(todo_create.php, todo_read.php, など)
include('functions.php'); // 関数を記述したファイルの読み込み
$pdo = connect_to_db(); // 関数実行
// 他のDB接続が必要なファイルでも上記の2行でOK!

// $dbn = 'mysql:dbname=YOUR_DB_NAME;charset=utf8;port=3306;host=localhost';
// $user = 'root';
// $pwd = '';

// try {
//   $pdo = new PDO($dbn, $user, $pwd);
// } catch (PDOException $e) {
//   echo json_encode(["db error" => "{$e->getMessage()}"]);
//   exit();
// }

$sql = 'SELECT * FROM todo_table3';

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
  $output = "";
  foreach ($result as $record) {
    $output .= "<tr>";
    $output .= "<td>{$record["posted_date"]}</td>";
    $output .= "<td>{$record["movie_title"]}</td>";
    $output .= "<td>{$record["genre"]}</td>";
    $output .= "<td>{$record["content"]}</td>";
    // edit deleteリンクを追加
    $output .= "<td>
                  <a href='todo_edit.php?id={$record["id"]}'>edit</a>
               </td>";
    $output .= "<td>
                  <a href='todo_delete.php?id={$record["id"]}'>delete</a>
               </td>";
    $output .= "</tr>";
    // edit deleteリンクを追加
    $output .= "</tr>";
  }
  // $recordの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
  // 今回は以降foreachしないので影響なし
  unset($record);
}
?>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ゴルフスイングお悩み相談掲示板</title>
</head>

<body>
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>お悩み投稿欄（入力画面）</legend>
      <div>
        動画タイトル: <input type="text" name="movie_title">
      </div>
      <div>
        投稿日: <input type="date" name="posted_date">
      </div>
      <div>
        ジャンル: <input type="text" name="genre">
      </div>
      <div>
        相談内容: <input type="text" name="content">
      </div>
      <div>
        <button>投稿する</button>
      </div>
    </fieldset>
  </form>

  <fieldset>
    <legend>過去のお悩み相談リスト（一覧画面）</legend>
    <table>
      <thead>
        <tr>
          <th>投稿日</th>
          <th>動画タイトル</th>
          <th>ジャンル</th>
          <th>相談内容</th>
        </tr>
      </thead>
      <tbody>
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
    
</body>

</html>
