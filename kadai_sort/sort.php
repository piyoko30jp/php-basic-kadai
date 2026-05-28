<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        function sort_2way(array &$array, bool $order)
        {
            if ($order === true) {
                // --- YESの場合（昇順） ---
                echo '昇順にソートします。' . '<br>';

                // 引数$arrayを昇順にソート（PHP標準関数）
                sort($array);
            } else {
                // --- NOの場合（降順） ---
                echo '降順にソートします。' . '<br>';

                // 引数$arrayを降順にソート（PHP標準関数）
                rsort($array);
            }

            // 配列を順番に取り出す
            foreach ($array as $value) {
                echo $value . '<br>';
            }
        }

        sort_2way($nums, true);
        sort_2way($nums, false);

        ?>
    </p>
</body>

</html>