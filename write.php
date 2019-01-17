<?php
require_once('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <!-- 부트스트랩 코드 삽입  -->
</head>

<body id="body">
  <header class = "jumbotron text-center">
    <h1><a href="index.php">프리스타일 포지션별 역할 설명</a></h1>
  </header>

  <div class="row">
    <nav class ="col-md-2">
      <ol>
        <?php
        $sql = "SELECT * FROM `intro`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
          echo '<li><a href="index.php?id='.$row['position'].'">'.htmlspecialchars($row['position']).'</a></li>';
        }
        ?>
      </ol>
    </nav>
    <div class="col-md-8">
      <div id="content">
        <input type="button" name="name" value="White" onclick="document.getElementById('body').className=''">
        <input type="button" name="name" value="Black" onclick="document.getElementById('body').className='black'">
        <a href="write.php">쓰기</a>

        <article>
          <form class="" action="process.php" method="post">
            <p>
              <label for="position">포지션 : </label>
              <input id="position" type="text" name="position">
            </p>
            <p>
              <label for="part">역할 : </label>
              <textarea id="part" name="part" rows="10" cols="50"></textarea>
            </p>
            <p>
              <input type="submit"  value="입력">
            </p>
          </form>
        </article>
        <div>
        </div>
      </div>
    </body>
    </html>
