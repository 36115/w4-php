<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรวิชญ์-610-11</title>
</head>
<body>
    <form method="get">
        ทีม 1: <input type="text" name="team1">
        </br>
        ทีม 2: <input type="text" name="team2">
        </br>
        <input type="submit" value="ตกลง"><input type="reset" value="รีเซต">
    </form>

    <?php
    $team1 = $_GET['team1'];
    $team2 = $_GET['team2'];

    if ($team1 > $team2) {
        echo "ทีม 1 ชนะ";
    }
    if ($team2 > $team1) {
        echo "ทีม 2 ชนะ";
    }
    if ($team1 == $team2) {
        echo "ทั้งคู่เสมอ";
    }

    ?>
</body>
</html>
