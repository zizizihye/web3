<!doctype html>
<html>
<head>
  <title> Laputa </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <a class="center2" href="laputa.php"><img src="images/index02.png" onmouseover="this.src='images/index03.png'" onmouseout="this.src='images/index02.png'"></a><p>
  <a class="center2"><img src="images/indexxx.png"></a>
</div>
<p>
  <strong><div style="font-size:15px; color:#8B7CFC;">
  <?php
  if(isset($_POST['name'])){
    echo $_POST['name']."´▽｀ 안녕?";
  }
  else{
    ?>
  </div></strong>
    <form action="index.php" method="post">
      <input type="text" name="name" size="5" style="border:2px solid #8B7CFC;">
      <input type="submit" value="login" style="border:2px solid #8B7CFC;">
    </form>
    <?php
  }
    ?>
</p>
</body>
</html>
