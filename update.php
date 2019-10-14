<?php
function print_title(){
  if(isset($_GET['title']));{
    echo $_GET['title'];
  }
}
function print_description(){
  if(isset($_GET['title'])){
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
    echo "title : ";
    print_title();
    ?>
    <br>
  <?php
    echo "description : ";
    print_description();
    ?>
  <p>
    <?php
    if(isset($_GET['title'])){?>
    <a href="update.php?title=<?=$_GET['title'];?>">update</a>
  <?php } ?>
      <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?=$_GET['title']?>">
        <p>
          <input type="text" name="title" value="<?php print_title(); ?>">
        </p>
        <p>
          <textarea name="description"><?php print_description();?></textarea>
        </p>
        <p>
          <input type="submit">
        </p>
      </form>
    </p>
  </body>
</html>
