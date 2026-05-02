<?php
// 引数に1足して返す関数
function addOne($num) {
    return $num + 1;
}

// 引数に8を入れる
$result = addOne(8);

// 出力
echo $result . PHP_EOL;