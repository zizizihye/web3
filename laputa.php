<!doctype html>
<html>
<head>
  <title>Laputa</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
  <div id="grid">
      <div class="category">
          <a href="laputa.php"><img src="images/index02.png" width="150px" onmouseover="this.src='images/index03.png'" onmouseout="this.src='images/index02.png'"></a>
          <img src = "images/ly2.png" style="margin-bottom:10px;">
          <img src = "images/menu.png"usemap="#mapnav">
          <map name="mapnav" id="mapnav">
            <area shape="rect" coords="0,0,146,53" href="laputa.php?id=daily">
            <area shape="rect" coords="0,57,146,106" href="laputa.php?id=like">
            <area shape="rect" coords="0,107,146,152" href="laputa.php?id=trip">
            <area shape="rect" coords="0,159,146,207" href="laputa.php?id=diary">
            <area shape="rect" coords="0,211,146,254" href="laputa.php?id=comment">
    </div>
    <div id="article">
      <div id="menu">
        <?php
        if(isset($_GET['id'])){
          echo $_GET['id'];
        }
          else{
            echo "Laputa";
          }
          ?>
      </div>
      <div id="main_article">
        <?php
        if(isset($_GET['id'])){
          include($_GET['id'].".php");
        }
          else{
            echo
            file_get_contents("testmain.php");
          }
          ?>
        </div>
    </div>
  </div>
</html>
