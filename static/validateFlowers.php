<?
  header('Content-Type: application/json');
  require('db.php');
  $sql = "SHOW TABLES";
  $res = mysqli_query($link, $sql);
  $out = [];
  for($i = 0; $i < mysqli_num_rows($res); ++$i) {
    $table = mysqli_fetch_assoc($res)['Tables_in_' . $db'];
    $sql = "SELECT * FROM $table";
    $res2 = mysqli_query($link, $sql);
    $content = [];
    while($row = mysqli_fetch_assoc($res2)) {
            array_push($content, $row);
    }
    $out[$table] = $content;
  }
  $out = $out['flowers'];
  foreach($out as &$value){
    $value['url'] = 'https://cobbmtn.fairuse.org/static/validateFlowers.php';
  }
  echo json_encode($out);
?>
