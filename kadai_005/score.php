<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>score.php</title>
</head>
<body>
    <?php
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10= 60;

    // 10人の合計点数
    $totalScore = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

    // 10人の平均点数
    $averageScore = $totalScore / 10;

    echo $averageScore;
    ?>
</body>
</html>