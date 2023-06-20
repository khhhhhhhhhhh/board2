<?php
include "dbconn2.php";
$idx = $_GET['idx'];
$query = "delete from $table where idx='$idx'";
$stmt = $conn->query($query);
echo "<script>alert('삭제되었습니다');</script>";
echo "<script>location.href='notice_list2.php';</script>";

?>