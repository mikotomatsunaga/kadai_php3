<?php
// var_dump($_POST);
// exit();

//空っぽだったら困る処理
// if (
//     !isset($_POST['movie_title']) || $_POST['movie_title'] == '' ||
//     !isset($_POST['posted_date']) || $_POST['posted_date'] == '' ||
//     !isset($_POST['genre']) || $_POST['genre'] == '' ||
//     !isset($_POST['content']) || $_POST['content'] == '' ||
//     !isset($_POST['id']) || $_POST['id'] == ''
//   ) {
//     echo json_encode(["error_msg" => "no input"]);
//     exit();
//   }


$movie_title = $_POST['movie_title'];
$posted_date = $_POST['posted_date'];
$genre = $_POST['genre'];
$content = $_POST['content'];
$id = $_POST['id'];


include('functions.php'); // 関数を記述したファイルの読み込み
$pdo = connect_to_db(); // 関数実行


$sql = 'UPDATE todo_table3 SET movie_title=:movie_title, posted_date=:posted_date, genre=:genre, content=:content, updated_at=sysdate() WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':movie_title', $movie_title, PDO::PARAM_STR);
$stmt->bindValue(':posted_date', $posted_date, PDO::PARAM_STR);
$stmt->bindValue(':genre', $genre, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  header('Location:todo_input_read.php');
  exit();
}

