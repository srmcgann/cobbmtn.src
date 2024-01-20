<?
  require('db.php');
  for($i=14;$i<50;$i++){
    echo 'insert into flowers (price, description, image, enabled, name, flowerCategory, visibleInAdmin) values ('.$i.', "Plus Delivery", "https://srmcgann.github.io/assets/Xk6oO.jpg", 1, "Designer\'s Choice - $'.$i.'", "Designer\'s Choice-",0);'."\n";
  }
?>
