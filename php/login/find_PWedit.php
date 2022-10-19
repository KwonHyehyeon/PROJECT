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

    <?php include "../include/link.php" ?>
</head>
<body>
    <!-- 비밀번호 찾기 팝업 -->
    <div class="findPW__popup">
        <div class="findPW__inner">
            <div class="findPW__header">
                <h3>아이디·비밀번호 찾기</h3>
            </div>
            <div class="find__btn">
                <a class="findID__btn" href="find_ID.php">아이디</a></li>
                <a class="findPW__btn active" href="find_PW.php">비밀번호</a></li>
            </div>
            <div class="findPW__contents">
                <p class="findPW__desc">
                    비밀번호를 변경할 수 있습니다. <br>
                    새로 사용할 비밀번호를 입력해주세요.
                </p>
                <form name="findPWbyEmail" action="find_PWeditSave.php" method="post">
                    <fieldset>
                        <legend>비밀번호 찾기 입력폼</legend>
                        <div class="input_and_button">
                            <label for="youPass">새 비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="새 비밀번호 입력" class="input__style" required>
                        </div>
                        <div class="input_and_button">
                            <label for="youPassC">새 비밀번호 확인</label>
                            <input type="password" name="youPassC" id="youPassC" placeholder="새 비밀번호 재입력" class="input__style" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="findResultLogin__button">비밀번호 변경</button>
                  </form>
            </div>
            <div class="findPW__footer">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>