<?php
include_once "db.php";
//處理刪除資料的請求
$id=$_POST['id'];

// 後端取資料的方式
// $row=$Stu->find($id);

$Stu->del($id);
//echo $Stu->del($id);
echo $_POST['classroom'];

// 後端取資料的方式
// echo $row['classroom'];

?>