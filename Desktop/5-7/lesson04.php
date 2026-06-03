<?php

$queue = [];

while (true) {

    echo "\n";
    echo "===== キュー操作 =====\n";
    echo "1 : Enqueue\n";
    echo "2 : Dequeue\n";
    echo "3 : Front\n";
    echo "4 : IsEmpty\n";
    echo "その他 : 終了\n";
    echo "モード選択：";

    $mode = trim(fgets(STDIN));

    switch ($mode) {

        case "1":

            echo "データ入力：";
            $data = trim(fgets(STDIN));

            array_push($queue, $data);

            echo "Enqueueしました\n";
            break;

        case "2":

            if (empty($queue)) {
                echo "キューが空です\n";
            } else {
                echo "Dequeue : " . array_shift($queue) . "\n";
            }

            break;

        case "3":

            if (empty($queue)) {
                echo "キューが空です\n";
            } else {
                echo "Front : " . $queue[0] . "\n";
            }

            break;

        case "4":

            if (empty($queue)) {
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
