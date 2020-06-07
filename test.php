<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>「util.php」のテスト</title>
</head>
<body>
  <!-- dir には、文章の方向を ltr(left to right：左から右)、rtl(right to left：右から左)のいずれかで指定します。 -->

  <?php

    //--------------------------------
    //関数esのテスト
    //--------------------------------

    //util.phpの読み込み
    require_once("util.php");

    // 本来は入力フォームから入力されたと過程
    $input1 = "<h1>フォームから入力された文字</h1>";
    $input2 = es("<h1>フォームから入力された文字</h1>");

    echo $input1; // 処理なしで表示
    echo $input2; // 処理をしてから表示
  ?>

  <p>そのまま表示した方は、HTMLのh1タグがそのまま機能してしまっている。これが危険でXSSに繋がる脆弱性。</p>
  <p>下の方はh1がそのまま文字として表示されていて、h1タグとしての機能を果たしていない。つまり、関数esによってHTMLエスケープが行われたということ。</p>

  <?php
    //--------------------------------
    //関数ckenのテスト
    //--------------------------------

    //util.phpの読み込み
    require_once("util.php");

    $encoding = mb_internal_encoding();
    echo "現在の利用環境のエンコードは", $encoding, "です。";

    $string = "チェックする文字列";
    //$stringをShift-JISという文字コードに変換
    $changed_string = mb_convert_encoding($string, 'Shift-JIS');

    if (cken([$changed_string])) {
      echo "文字エンコードは一致しました。";
    } else {
      echo "文字エンコードが一致しません。";
    }
  ?>
</body>
</html>