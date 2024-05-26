<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>課題016_class</title>
  </head>

  <body>
    <p>
      <?php
      //Step2 クラスを作成する
      //Foodクラス
      class Food{
        //プロパティを定義する
        private $name;
        private $price;

        //「price」プロパティの値を出力するメソッド
        public function show_price(){
          echo $this->price . '円' . '<br>';
        }

        //プロパティに値を代入するコンストラクタ
        public function __construct(string $name, int $price){
          $this->name = $name;
          $this->price = $price;
        }
      }

      //Animalクラス
      class Animal{
        //プロパティを定義する
        private $name;
        private $height;
        private $weight;

        //「height」 プロパティの値を出力するメソッド
        public function show_height(){
          echo $this->height . 'cm' . '<br>';
        }

        //プロパティに値を代入するコンストラクタ
        public function __construct(string $name, int $height, int $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }

      //Step3 インスタンスを作成し、出力する
      $food = new Food('唐揚げ',300);
      $animal = new Animal('cat',25,3500);

      //print_r関数を使いそれぞれのインスタンスを出力
      print_r($food);
      echo '<br>';  //改行する

      print_r($animal);
      echo '<br>';  //改行する

      //Step4 メソッドへアクセスする
      $food->show_price();
      $animal->show_height();
      
      ?>
    </p>
  </body>
</html>