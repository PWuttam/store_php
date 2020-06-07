<?php

//esとは、配列の形でいろいろな値が渡されたときでも、一気にHTMLエスケープ可能
function es($date) {
  //$dateが配列の時
  if(is_array($date)) {
    //再度呼び出し
    return array_map(__METHOD__, $date);
  }
  else {
    //HTMLエスケープを行う
    return htmlspecialchars($date, ENT_QUOTES, 'utf-8');
  }
}

function cken(array $date) {

  $result = true;
  // この関数の最後まで$resultがtrueのままで居続けることができれば
  // 文字エンコードは一致しているというような判断をするために定義

  // 値を順々に取り出して（繰り返し）変数$valueに格納
  foreach($date as $key => $value) {

    // データが配列の場合「空白を削除して」1つの文字列として変数$valueに格納する
    if(is_array($value)) {
      $value = implode("", $value);
    }

    if(!mb_check_encoding($value)) {
      //文字エンコードが一致しないとき
      $result = false;
      //foreachでの査定を終わらせる
      break;
    }
  }
  return $result;
}

?>