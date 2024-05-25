<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>課題011_kadai_011</title>
  </head>

  <body>
    <!--  連想配列を作成する -->
    <p>
      <?php
      $profiles = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];
      //値を出力する
      foreach($profiles as $key => $value){
        echo "{$key} : {$value}<br>";
      }
      ?>
    </p>
  </body>
</html>