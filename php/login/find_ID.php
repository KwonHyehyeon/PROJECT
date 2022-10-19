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
                  아이디를 모르시나요? <br>
                  회원님의 이름과 휴대전화 번호를 입력해주세요.
                </p>
                <form name="findID" action="find_IDSave.php" method="post">
                    <fieldset>
                        <legend>아이디 찾기 입력폼</legend>
                        <div>
                            <label for="youName">이름</label>
                            <input type="text" name="youName" id="youName" placeholder="이름" class="input__style" required>
                        </div>
                        <div>
                            <label for="youPhone">휴대전화</label>
                            <input type="tel" name="youPhone" id="youPhone" placeholder="휴대전화 (- 포함)" class="input__style" required>
                        </div>
                        <button type="submit" class="input__button">아이디 찾기</button>
                    </fieldset>
                </form>
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

