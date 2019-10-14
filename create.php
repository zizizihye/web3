<?php
function print_title(){
  if(isset($_GET['title'])){
    echo "title : ";
    echo $_GET['title'];
  }
}
function print_description(){
  if(isset($_GET['title'])){
    echo "description : ";
    echo file_get_contents("data/".$_GET['title']);
  }
}
function print_list(){
  $list = scandir('./data');
  $i=0;
  while($i<count($list)){
    if($list[$i]!='.'){
      if($list[$i]!='..'){
        echo "<li><a href=\"laputa.php?id=diary&title=$list[$i]\">$list[$i]</li>\n";
      }
    }
    $i = $i+1;
  }
}
 ?>

<!doctype html>
<html>
<head>
  <title>Laputa</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="images/test.png" width="100">
    <p style="margin-top:30px"></p>
    <ol>
      <?php
        print_list();
      ?>
    </ol>
  <?php
    print_title();
    ?>
    <br>
  <?php
    print_description();
    ?>
  <p>
      <a href="laputa.php?id=create">create</a>
      <form action="create_process.php" method="post">
        <p>
          <input type="text" name="title">
        </p>
        <p>
          <textarea name="description"></textarea>
        </p>
        <p>
          <input type="submit">
        </p>
      </form>
    </p>
  </body>
</html>
