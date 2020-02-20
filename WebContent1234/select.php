<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'opentutorials');

$sql = "SELECT * FROM device";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)) {
  $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['image_path']}</a></li>";
}

?>