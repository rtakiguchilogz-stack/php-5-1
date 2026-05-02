<?PHP
$capitals = [
    "日本" => "東京",
    "アメリカ" => "ワシントン",
    "イギリス" => "ロンドン",
    "フランス" => "パリ"
];

foreach ($capitals as $country => $capital) {
    echo $country . "の首都は" . $capital . "です。" . PHP_EOL;
}