<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>テストの平均点を計算しよう</title>
</head>

<body>
<?php
// 10個の変数に整数を代入する
$score1 =80;
$score2 =60;
$score3 =55;
$score4 =40;
$score5 =100;
$score6 =25;
$score7 =80;
$score8 =95;
$score9 =30;
$score10 =60;

// 合計値を計算する
$total = $score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;

// 合計を個数で割って平均値を出す
$average = $total / 10;

// 結果を画面に表示する
echo $average;
?>
</body>

</html>