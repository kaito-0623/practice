<?php
// データベース接続設定
$dsn = 'mysql:dbname=practice_db;host=localhost;charset=utf8';
$user = 'root';
$password = 'root'; // MAMPのデフォルトパスワード

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "データベース接続成功<br>";
} catch (PDOException $e) {
    echo '接続失敗: ' . $e->getMessage();
    exit;
}

// データの挿入
$sql = "INSERT INTO テーブル名 (カラム1, カラム2) VALUES (:value1, :value2)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':value1', '値1');
$stmt->bindValue(':value2', '値2');
$stmt->execute();
echo "データ挿入成功<br>";

// データの取得
$sql = "SELECT * FROM テーブル名";
$stmt = $pdo->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    echo $row['カラム名'] . "<br>";
}
?>















