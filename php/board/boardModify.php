<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>지구ON 커뮤니티 게시글 수정하기</title>

    <?php include "../include/link.php" ?>
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main">
        <section id="banner">
            <div class="banner__wrap">
                <h2>커뮤니티</h2>
                <p>이곳은 소통하는 공간입니다. <br> 지구 ON은 당신이 서 있는 오늘과 걸어온 모든 하루를 응원합니다.</p>
                <img src="../assets/img/board_img01.png" alt="커뮤니티 이미지">
            </div>
        </section>
        <!-- //banner -->

        <section id="board" class="container">
            <h2>게시글 수정하기</h2>
            <div class="board__inner">
                <div class="board__write">
                    <form action="boardModifySave.php" name="boardModify" method="post">
                        <fieldset>
                            <legend>게시판 수정 영역</legend>
<?php
    $myBoardID = $_GET['myBoardID'];

    $sql = "SELECT myBoardID, boardTitle, boardContents FROM myBoard WHERE myBoardID = {$myBoardID}";
    $result = $connect -> query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        echo "<div style='display:none'><label for='myBoardID'>번호</label><input type='text' name='myBoardID' id='myBoardID' value='".$info['myBoardID']."'></div>";
        echo "<div><label for='boardTitle'>제목</label><input type='text' name='boardTitle' id='boardTitle' value='".$info['boardTitle']."'></div>";
        echo "<div><label for='boardContents'>내용</label><textarea name='boardContents' id='boardContents' rows='20'>".$info['boardContents']."</textarea></div>";
        echo "<div><label for='youPass'>비밀번호</label><input type='password' name='youPass' id='youPass' placeholder='현재 로그인하신 계정의 비밀번호를 입력해주세요.' autocomplete='off' required></input></div>";
    }
?>


                            <!-- <div>
                                <label for="boardTitle">제목</label>
                                <input type="text" name="boardTitle" id="boardTitle" placeholder="게시글의 제목을 입력해주세요.">
                            </div>
                            <div>
                                <label for="boardContents">내용</label>
                                <textarea name="boardContents" id="boardContents" rows="20" placeholder="게시글의 내용을 입력해주세요."></textarea>
                            </div>
                            <div>
                                <label for="boardPass">비밀번호</label>
                                <input type="password" name="boardPass" id="boardPass" placeholder="현재 로그인하신 계정의 비밀번호를 입력해주세요.">
                            </div> -->

                            <div class="board__write__btn">
                                <a href="boardStory.php" class="back_btn">게시판으로</a>
                                <button type="submit" value="수정하기" class="btn">저장하기</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- //board__inner -->
        </section>
        <!-- //board -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/header.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>