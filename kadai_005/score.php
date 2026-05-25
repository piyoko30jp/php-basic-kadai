<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>テストの平均点を計算しよう</title>
</head>

<body>
<?php
// 10個の整数を配列に準備する
$numbers = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

// 配列の合計値を計算する
$total = array_sum($numbers);

// 配列の要素数（個数）を数える（今回は 10）
$count = count($numbers);

// 合計を個数で割って平均値を出す
$average = $total / $count;

// 結果を画面に表示する
echo $average;
?>
</body>

</html>