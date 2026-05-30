<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP課題（クラス）</title>
</head>

<body>
    <p>
        <?php
// Foodのクラスを定義する
        class Food {

        // プロパティを定義する                        
            private $name;
            private $price;

// コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;  
}

// メソッドを定義する
            public function show_price() {
                echo $this->price . '<br>';
            }          
        }

// インスタンス化する
        $potato = new Food('potato', 250);
        print_r($potato,);
        echo '<br>';

// Aimalのクラスを定義する
        class Animal {

// プロパティを定義する                        
            private $name;
            private $height;
            private $weight;   

// コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
}

// メソッドを定義する
            public function show_height() {
                echo $this->height . '<br>';
            }
        }

// インスタンス化する
        $dog = new Animal('dog', 60 , 5000);
        print_r($dog);
        echo '<br>';

$potato->show_price();
$dog->show_height();

?>
    </p> 

</body>
</html>