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
    <title>로그인 : 비밀번호 재설정</title>
</head>
<body>
    <?php
        $youPass = $_POST['youPass'];
        $youPassC = $_POST['youPassC'];
        $myMemberID = $_SESSION['myMemberID'];

        // echo $_SESSION['myMemberID']."<br>";
        // echo $youPass."<br>";

        if($youPass == $youPassC){
            $sql = "UPDATE myMember SET youPass = '{$youPass}' WHERE myMemberID = '{$myMemberID}'";
            echo "<script>alert('비밀번호 재설정이 성공했습니다! 다시 로그인 해주세요.'); location.href='../main/main.php';</script>";    
        } else {
            echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 시도해주세요.'); history.back(1)</script>";
        }

        $result = $connect -> query($sql);
    ?>
</body>
<script>
    
</script>
</html>