<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 : 비밀번호 찾기</title>

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
                  비밀번호를 모르시나요? <br>
                  비밀번호 찾기 방법 중 가능한 방법을 선택해주세요.
                </p>
                <div class="findPWContents__btn">
                  <a class="phone" href="find_PWphone.php">휴대폰 번호</a></li>
                  <a class="email" href="find_PWemail.php">이메일 주소</a></li>
              </div>
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
</html>

