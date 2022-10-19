<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>지구ON 커뮤니티 이야기방</title>

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
            <h2>이야기방</h2>
            <div class="board__inner">
                <div class="board__view">
                    <table>
                        <colgroup>
                            <col style="width: 20%">
                            <col style="width: 80%">
                        </colgroup>
                        <tbody>
<?php
    $myBoardID = $_GET['myBoardID'];

    // echo $myBoardID;

    $sql = "SELECT b.boardTitle, m.youName, b.regTime, b.boardView, b.boardContents FROM myBoard b JOIN myMember m ON(m.myMemberID = b.myMemberID) WHERE b.myBoardID = {$myBoardID}";
    $result = $connect -> query($sql);

    // 보드뷰 + 1
    $sql = "UPDATE myBoard SET boardView = boardView + 1 WHERE myBoardID = {$myBoardID}";
    $connect -> query($sql);

    if($result) {
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        // echo "<pre>";
        // var_dump($info);
        // echo "</pre>";

        echo "<tr><th>제목</th><td>".$info['boardTitle']."</td></tr>";
        echo "<tr><th>등록자</th><td>".$info['youName']."</td></tr>";
        echo "<tr><th>작성일</th><td>".date('Y-m-d H:i', $info['regTime'])."</td></tr>";
        echo "<tr><th>조회수</th><td>".$info['boardView']."</td></tr>";
        echo "<tr><th>내용</th><td class='height'>".$info['boardContents']."</td></tr>";
    }
?>
                            <!-- <tr>
                                <th>제목</th>
                                <td>패스트 푸드점에서 빨대를 제공하지 않게 된 점이 너무 좋은 것 같네요..!</td>
                            </tr>
                            <tr>
                                <th>등록자</th>
                                <td>김춘배</td>
                            </tr>
                            <tr>
                                <th>작성일</th>
                                <td>2022-09-01 15:32:46</td>
                            </tr>
                            <tr>
                                <th>조회수</th>
                                <td>109</td>
                            </tr>
                            <tr>
                                <th>내용</th>
                                <td class="height">
                                    패스트 푸드점에서 빨대를 제공하지 않게 된 점이 너무 좋은 것 같네요..! <br>
                                    대부분 패스트푸드점이 다 그러는 추세더라구요~ 환경에 너무 도움이 될 것 같아요^^ <br>
                                    그럼 더 이상 쓸말 없으니 20000~
                                </td>
                            </tr>
                            <tr>
                                <th>이전글</th>
                                <td><a href="#">푸른 숲을 위한 캠페인에 동참해 주세요~! (아마존 숲 보존을 위한 캠페인 참여)</a></td>
                            </tr>
                            <tr>
                                <th>다음글</th>
                                <td><a href="#">웹GIRL~ 오늘부터 환경운동가가 되겠습니다 GIRL~♀</a></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>

                <div class="board__btn">
                    <a href="boardModify.php?myBoardID=<?=$myBoardID?>">수정하기</a>
                    <a href="boardRemove.php?myBoardID=<?=$myBoardID?>" onclick="alert('정말 삭제하시겠습니까?')">삭제하기</a>
                    <a href="boardStory.php">목록으로</a>
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