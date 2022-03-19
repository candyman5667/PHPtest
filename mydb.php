<?php

$dsn = 'mysql:dbname=mydb;host=localhost';
$user = 'root';
$password = 'candyman5667';
//※XAMPPを使用している場合は、passwordの中身は空にしてください。

try {
  $dbh = new PDO($dsn, $user, $password);
  print("接続に成功しました。<br>");
} catch (PDOException $e) {
  print('Error:' . $e->getMessage());
}

$count = $dbh->exec('INSERT INTO items SET id=1, item_name="peach",price=210, keyword="缶詰,ピンク,甘い"');
echo $count . '件のデータを挿入しました';

$dbh = null;
