<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>クーポンコード入力ページ</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<body>
  <div class="part-title">購入する商品</div>
  <div class="item">
     <div class="item-pic"><img src="./image/bike.jpg" alt="商品画像"></div>
    <div class="item-company">BMW</div>
    <div class="item-title">世界一かっこいいバイク</div>
    <div class="item-price">1,000,000円</div>
  </div>
  <div class="part-title">クーポンコードを使用する</div>
  <div class="coupon">
    ＊本来は表示されない。
    <ul>
      <li>5Q32i : 20%OFF</li>
      <li>gA22a : 15%OFF</li>
      <li>k0ja2 : 10%OFF</li>
      <li>gjl4a : 5%OFF</li>
      <li>gr1m9 : 5%OFF</li>
    </ul>
  </div>

  <!-- 入力フォームの作成 -->

  <form class="orderbox" action="">
    <!-- 隠しフィールドにクーポンコードと商品IDを設定してPOSTする -->
    <div class="coupon-title">使用するクーポンコード</div>
    <div>いかに使用するクーポンコードを入力してください。</div>
    <input type="text">
    <input type="text">
    <input type="submit" value="クーポンを使用する" style="">
  </form>


</body>
</html>
