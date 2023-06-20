<?php
include "dbconn2.php";

$title = $_POST['title'];
$content = $_POST['content'];
$now = date('Y-m-d H:i:s');

$query = "insert into $table (title, content, up_time) values('$title','$content', '$now')";
$stmt = $conn->query($query);
echo "<script>alert('추가되었습니다');</script>";
echo "<script>location.href='notice_list2.php';</script>";
?>
