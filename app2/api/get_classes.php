<?php

include_once "db.php";
// 會一次選擇整筆資料
// $classes=$Stu->all(" group by `classroom`");

$classes=q("select `classroom` from `students` group by `classroom`");

echo json_encode($classes);


?>