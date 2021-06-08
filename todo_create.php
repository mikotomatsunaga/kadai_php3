<?php

if (
  !isset($_POST['movie_title']) || $_POST['movie_title'] == '' ||
  !isset($_POST['genre']) || $_POST['genre'] == '' ||
  !isset($_POST['content']) || $_POST['content'] == '' ||
  !isset($_POST['posted_date']) || $_POST['posted_date'] == ''
) {
  echo json_encode(["error_msg" => "no input"]);
  exit();
}

$movie_title = $_POST['movie_title'];
$posted_date = $_POST['posted_date'];
$genre = $_POST['genre'];
$content = $_POST['content'];


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

$sql = 'INSERT INTO todo_table3(id, movie_title, posted_date, genre, content, created_at, updated_at) VALUES(NULL, :movie_title, :posted_date, :genre, :content, sysdate(), sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':movie_title', $movie_title, PDO::PARAM_STR);
$stmt->bindValue(':posted_date', $posted_date, PDO::PARAM_STR);
$stmt->bindValue(':genre', $genre, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  header("Location:todo_input_read.php");
  exit();
}
