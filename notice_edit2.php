<?php

  include "dbconn2.php";

  $idx = $_POST['idx'];
  $title = $_POST['title'];
  $content = $_POST['content'];
  $now = date('Y-m-d H:i:s');
  
  $query = "UPDATE $table SET title='$title', content='$content', up_time='$now' where idx = '$idx'";
  $stmt = $conn->query($query);
  
  echo "<script>alert('변경되었습니다');</script>";
  echo "<script>location.href='notice_list2.php';</script>";

?>