<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      //Step3 独自のソート関数を作る
      function sort_2way($array, $order){
        if($order === "TRUE"){
          echo '昇順にソートします。<br>';
          //配列を昇順にソートする関数
          sort($array);
          //配列の中身を出力する。
          foreach ($array as $value){
            echo "{$value}<br>";
          }
        }
        else if($order === "FALSE"){
          echo '降順にソートします。<br>';
          ///配列を降順にソートする関数
          rsort($array);
          //配列の中身を出力する
          foreach ($array as $value){
            echo "{$value}<br>";
          }
        }
      }

      //Step4 ソートする配列を宣言
      $num = [15, 4, 18, 23, 10];

      //Step5 独自のソート関数を呼び出す
      //昇順ソート
      sort_2way($num, "TRUE");
      //降順ソート
      sort_2way($num,"FALSE");

      ?>
    </p>
  </body>
</html>