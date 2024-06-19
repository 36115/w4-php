<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรวิชญ์-610-11</title>
</head>
<body>
    <form method="get">
        เดือน: <input type="text" name="month">
        </br>
        <input type="submit" value="ตกลง">
    </form>

    <?php
        $month = $_GET['month'];

        switch ($month) {
            case ("มกราคม") :
            case ("มีนาคม") :
            case ("พฤษภาคม") :
            case ("กรกฎาคม") :
            case ("สิงหาคม") :
            case ("ตุลาคม") :
            case ("ธันวาคม") :
                echo "เดือน $month มี 31 วัน";
                break;
            case ("เมษายน") :
            case ("มิถุนายน") :
            case ("กันยายน") :
            case ("พฤศจิกายน") :
                echo "เดือน $month มี 30 วัน";
                break;
            case ("กุมภาพันธ์") :
                echo "เดือน $month มี 28 หรือ 29 วัน";
                break;
            case ("blank") :
                break;
            default:
                echo "ไม่มีเดือน! กรุณาใส่ใหม่";
        }
    ?>

</body>
</html>
