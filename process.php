<?php
require_once('conn.php');
//데이터베이스 접속

// 포지션,역할을 intro 테이블에 추가
$position = mysqli_real_escape_string($conn, $_POST['position']);
$part = mysqli_real_escape_string($conn, $_POST['part']);
$sql = "INSERT INTO `intro` (`position`, `part`) VALUES ('{$position}', '{$part}');";

mysqli_query($conn, $sql);
// 사용자를 index.php로 이동
header('Location: index.php');
 ?>
