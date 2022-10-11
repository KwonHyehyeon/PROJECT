<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 완료</title>

    <link rel="stylesheet" href="../html/assets/css/join.css">
    <link rel="stylesheet" href="../html/assets/css/fonts.css">
    <link rel="stylesheet" href="../html/assets/css/reset.css">
    <link rel="stylesheet" href="../html/assets/css/header.css">
    <link rel="stylesheet" href="../html/assets/css/common.css">
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>

    <?php include "../include/header.php" ?>

    <section id="joinResult" class="container">
        <div class="joinResultWrap">
            <a href="#">
                <h2>지구</h2>
                <figure>
                    <img src="../html/assets/img/earthlogo.png" alt="지구ON로고">
                </figure>
            </a>
        </div>
        <div class="result__inner">
            <figure>
                <img src="../html/assets/img/earthonhero.png" alt="마스코트">
            </figure>
            <h3>
<?php
    include "../connect/connect.php";

    $youName = $_POST['youName'];
    $youGender = $_POST['youGender'];
    $youEmail = $_POST['youEmail'];
    $youPass = $_POST['youPass'];
    $youPhone = $_POST['youPhone'];
    $regTime = time();

    $youName = $connect -> real_escape_string(trim($youName));
    $youEmail = $connect -> real_escape_string(trim($youEmail));
    $youPass = $connect -> real_escape_string(trim($youPass));
    $youPhone = $connect -> real_escape_string(trim($youPhone));

    $youPass = sha1("web".$youPass);

    // 회원가입
    $sql = "INSERT INTO myAdminMember(youName, youEmail, youPass, youPhone, regTime) VALUES( '$youName', '$youEmail', '$youPass', '$youPhone', '$regTime')";
    $result = $connect -> query($sql);

    if($result) {
        echo "회원가입을 축하합니다. 로그인을 해주세요!";
    } else {
        echo "에러발생 -- 관리자에게 문의하세요!";
    }
?>
            </h3>
            <p>
                지구 ON과 함께 해주셔서 감사합니다.<br>
                가입이 완료되어 실천 리스트와 식물 키우기, 제로웨이스트 상품 서비스를 이용하실 수 있습니다.
            </p>
            <div>
            </div>
            <div class="result__btn">
                <div class="result__btn__img">
                    <a href="#">지구 ON 홈으로</a>
                </div>
                <div class="result__btn__img">
                    <a href="#" class="resultbtn2">마이 페이지로</a>
                </div>
            </div>
        </div>
        <footer id="join__footer">지구 ON</footer>
    </section>
    <!-- //joinResult -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/header.js"></script>  
</body>
</html>
