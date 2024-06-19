<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรวิชญ์-610-11</title>
</head>
<body>
    <form method="get">
        เดือน: <input type="text" name="month" value="<?php echo isset($_GET['month']) ? htmlspecialchars($_GET['month']) : ''; ?>">
        <br>
        <input type="submit" value="ตกลง">
    </form>

    <?php
        if (isset($_GET['month'])) {
            $month = $_GET['month'];
            $have_months = null;

            switch ($month) {
                case "มกราคม":
                case "มีนาคม":
                case "พฤษภาคม":
                case "กรกฎาคม":
                case "สิงหาคม":
                case "ตุลาคม":
                case "ธันวาคม":
                    $days = 31;
                    $have_months = true;
                    break;
                case "เมษายน":
                case "มิถุนายน":
                case "กันยายน":
                case "พฤศจิกายน":
                    $days = 30;
                    $have_months = true;
                    break;
                case "กุมภาพันธ์":
                    $days = "28 หรือ 29";
                    $have_months = true;
                    break;
                default:
                    $have_months = false;
            }

            if ($have_months) {
                echo "เดือน $month มี $days วัน";
            } else {
                echo "ไม่มีเดือน! กรุณาใส่ใหม่";
            }
        }
    ?>
</body>
</html>
