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
    <title>로그인 : 비밀번호 찾기</title>
</head>
<body>
    <?php
        $youEmail = $_POST['youEmail'];
        $youName = $_POST['youName'];

        // echo $youEmail;
        // echo $youName;

        $sql = "SELECT myMemberID FROM myMember WHERE (youName = '{$youName}' AND youEmail = '{$youEmail}')";
        $result = $connect -> query($sql);

        $info = $result->fetch_array(MYSQLI_ASSOC);

        // echo $sql;
        // $info['myMemberID'];

        $_SESSION['myMemberID'] = $info['myMemberID'];

        if($info['myMemberID']){
            echo "<script>alert('회원님의 비밀번호를 찾았습니다. 비밀번호를 재설정 해주세요!')</script>";
            echo "<script>location.href='find_PWedit.php';</script>";
        } else {
            echo "<script>alert('이름 또는 이메일 주소가 틀렸습니다. 다시 입력해주세요.')</script>";
            echo "<script>location.href='find_PWemail.php';</script>";
        }
    ?>
</body>

<!-- script -->
<script src="../assets/js/custom.js"></script>
</html>