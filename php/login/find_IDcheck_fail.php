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

    <?php include "../include/link.php" ?>
</head>
<body>
    <!-- 아이디 찾기 팝업 -->
    <div class="findID__popup">
        <div class="findID__inner">
            <div class="findID__header">
                <h3>아이디·비밀번호 찾기</h3>
            </div>
            <div class="find__btn">
                <a class="findID__btn active" href="find_ID.php">아이디</a></li>
                <a class="findPW__btn" href="find_PW.php">비밀번호</a></li>
            </div>
            <div class="findID__contents">
                <p class="findID__desc">
                    이름 또는 휴대전화 번호가 정확하지 않습니다. <br>
                    다시 입력해주세요!
                </p>
                <div class="findID__check">
                    <p>
                        휴대전화 번호는 하이픈(-)을 붙여 적도록 합니다. <br>
                        예시) <em>010-1234-4321</em>
                    </p>     
                </div>
                <a class="findResultLogin__button" href="find_ID.php">이전 페이지로</a>
            </div>
            <div class="findID__footer">
                <ul class="desc">
                    <li>지구ON</li>
                </ul>
                <a href="../main/main.php" class="btn-home" onClick="location.href('../main/main.php')"><span>닫기</span></a>
            </div>
        </div>
    </div>
</body>

<!-- script -->
<script src="../assets/js/custom.js"></script>
</html>

