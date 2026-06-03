<?php

$stack = [];

while (true) {

    echo "\n";
    echo "===== スタック操作 =====\n";
    echo "1 : Push\n";
    echo "2 : Pop\n";
    echo "3 : Peek\n";
    echo "4 : IsEmpty\n";
    echo "その他 : 終了\n";
    echo "モード選択：";

    $mode = trim(fgets(STDIN));

    switch ($mode) {

        case "1":

            echo "データ入力：";
            $data = trim(fgets(STDIN));

            array_push($stack, $data);

            echo "Pushしました\n";
            break;

        case "2":

            if (empty($stack)) {
                echo "スタックが空です\n";
            } else {
                echo "Pop : " . array_pop($stack) . "\n";
            }

            break;

        case "3":

            if (empty($stack)) {
                echo "スタックが空です\n";
            } else {
                echo "Peek : " . $stack[count($stack) - 1] . "\n";
            }

            break;

        case "4":

            if (empty($stack)) {
                echo "empty\n";
            } else {
                echo "not empty\n";
            }

            break;

        default:

            echo "処理を終了します\n";
            exit;
    }
}