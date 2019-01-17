<?php
require_once('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!-- 부트스트랩 코드 삽입  -->

  <title>프리스타일 포지션별 역할 설명</title>
  <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
</head>

<body id="body">
  <header class = "jumbotron text-center">
    <h1><a href="index.php">프리스타일2:플라잉덩크 포지션별 역할 설명</a></h1>
  </header>

  <div class="row">
    <nav class ="col-md-2">
      <ol>
        <?php
        $sql = "SELECT * FROM `intro`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo ' <li><a href="index.php?position=' .$row['position']. '">'.htmlspecialchars($row['position']).'</a></li>';
        }
        ?>
      </ol>
          <a href="https://cafe.naver.com/freestyle2m"target="_blank" title="네이버 공식카페로 이동"> 공식카페 바로가기</a>
    </nav>

    <div class="col-md-8">
      <div id="content">
        <article>
          <input type="button" name="name" value="White" onclick="document.getElementById('body').className=''">
          <input type="button" name="name" value="Black" onclick="document.getElementById('body').className='black'">
          <a href="write.php">쓰기</a>

          <?php
          if( empty($_GET['position']) ){
            echo "<br>"."궁금한 포지션을 선택하세요";
          } else {
            $position = mysqli_real_escape_string($conn, $_GET['position']);
            $sql = "SELECT intro.position, intro.part FROM intro WHERE intro.position=" . "'" .$position. "'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>

            <h2><?=htmlspecialchars($row['position'])?> </h2>
            <div id="info"><?=htmlspecialchars($row['part'])?>  </div>
            <?php
          }
          ?>

          <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://daesgeuldalgi-yeje.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


        </article>
    </div>
    </div>
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5c3e175cab5284048d0d19b4/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

</body>
</html>
