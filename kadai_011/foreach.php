<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題11</title>
</head>

<body>
    <p>
       <?php
       //連想配列の値を代入する
       $vegetable_data = ['name' => 'onion', 'price' => '200', 'place' => '北海道'];

       // 連想配列$variable_nameのキーと値をコロン(:)で区切り、要素ごとに改行して出力する
       foreach ($variable_name as $key => $value) {
        echo "{$key}: {$value}<br>";
    }
    ?>
</p>
</body>

</html>