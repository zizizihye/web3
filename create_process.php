<?php
file_put_contents('data/'.$_POST['title'],$_POST['description']);
header('Location: /laputa.php?id=diary&title='.$_POST['title']);
 ?>
