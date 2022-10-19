<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 : 아이디 찾기</title>
</head>
<body>
    <?php
        $myMemberID = $_POST['myMemberID'];
        $youName = $_POST['youName'];
        $youPhone = $_POST['youPhone'];

        // echo $youName;
        // echo $youEmail;

        $sql = "SELECT youEmail FROM myMember WHERE (youName = '{$youName}' && youPhone = '{$youPhone}')";
        $result = $connect -> query($sql);

        $info = $result->fetch_array(MYSQLI_ASSOC);

        $_SESSION['youEmail'] = $info['youEmail'];


        if($_SESSION['youEmail']){
            echo "<script>location.href='find_IDcheck.php';</script>";
        } else {
            echo "<script>location.href='find_IDcheck_fail.php';</script>";
        }
    ?>
</body>
</html>