<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP課題（foreach）</title>
</head>

<body>
   <p>
       <?php
       // 連想配列に値を代入する
       $product = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

 //  配列$productの要素を1つずつ順番に出力する
foreach ($product as $key => $value) {
    echo "{$key}:{$value} <br>";
}
       ?>
   </p>
</body>

</html>