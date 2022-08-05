<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>save csv</title>
</head>
<body>
<h1>save csv</h1>
<form action="/surveyDo.php" method="POST">
    <p>件名: <input type="text" name="subject"></p>
    <p>お名前: <input type="text" name="name"></p>
    <p>ふりがな: <input type="text" name="kana"></p>
    <p>お問い合わせ内容:</p>
    <textarea name="contact" id="" cols="30" rows="10"></textarea>
    <p>メールアドレス: <input type="text" name="mail"></p>
    <p><button type="submit">送信</button></p>
</form>
<h2>ファイル内容</h2>
<?php 
  $fp = fopen('test.csv','r');
  while(!feof($fp)) {
  $file = fgets($fp);
  echo $file . "<br>";
  }
  fclose($fp);
?>

</body>
</html>