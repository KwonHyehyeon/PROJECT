<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>지구ON 커뮤니티 공지사항</title>

    <?php include "../include/link.php" ?>
</head>

<body>
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
            <h2>공지사항</h2>
            <div class="board__inner">
                <div class="board__num">
                    <!-- <p>※ 총 <em>275</em>건의 공지사항이 있습니다.</p> -->
<?php
    $sql = "SELECT NoticeContents FROM myNoticeBoard";
    $result = $connect -> query($sql);
    
    if($result){
        $count = $result -> num_rows;
        echo "<p>※ 총 <em>".$count."</em>건의 공지사항이 등록되어 있습니다.</p>";
    }
?>
                </div>
                <div class="Notice__table">
                    <table>
                        <colgroup>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <tbody>
<?php

if(isset($_GET['page'])){
    $page = (int)$_GET['page'];
} else {
    $page = 1;
}

// $page = 20;
$viewNum = 10;
$viewLimit = ($viewNum * $page) - $viewNum;

// echo $_GET['page'];


// 두 개의 테이블을 join
$sql = "SELECT * FROM myNoticeBoard ORDER BY myNoticeBoardID DESC LIMIT {$viewLimit}, {$viewNum}";
$result = $connect -> query($sql);

if($result){
    $count = $result -> num_rows;
    var_dump($count);
    if($count > 0){
        for($i=1; $i <= $count; $i++){
            $info = $result -> fetch_array(MYSQLI_ASSOC);
            echo "<tr>";
            echo "<td>".date('d')."<p>".date('Y/m')."</p></td>";
            echo "<td><a href='#'>".$info['NoticeTitle']."</a></td>";
            echo "<td><a href='#'>+</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>공지사항이 없습니다.</td></tr>";
    }
}
?>
                            <!-- <tr>
                                <td>07<p>22/10</p>
                                </td>
                                <td><a href="#">가을 맞이 수원 화성행궁 거리 행진 행사 취소안내</a></td>
                                <td><a href="#">+</a></td>
                            </tr>
                            <tr>
                                <td>29<p>22/09</p>
                                </td>
                                <td><a href="#">[창원컨벤션센터] 2022 에코 라이프스타일 페어 전시회</a></td>
                                <td><a href="#">+</a></td>
                            </tr>
                            <tr>
                                <td>17<p>22/08</p>
                                </td>
                                <td><a href="#">대한민국 ESG 친환경대전 (국내 최대 박람회 9월 예정) 안내</a></td>
                                <td><a href="#">+</a></td>
                            </tr>
                            <tr>
                                <td>19<p>22/06</p>
                                </td>
                                <td><a href="#">[지구ON 스웨덴 지사] 하지(夏至) 기념 「미드소마(Midsommar)」 축제 안내 (6/21~6/26)</a></td>
                                <td><a href="#">+</a></td>
                            </tr>
                            <tr>
                                <td>20<p>22/04</p>
                                </td>
                                <td><a href="#">2022년 4월 22일, 「지구의 날」 기념 행사를 지구ON 판교 본사에서 진행합니다!</a></td>
                                <td><a href="#">+</a></td>
                            </tr>
                            <tr>
                                <td>18<p>22/03</p>
                                </td>
                                <td><a href="#">3월 21일, 봄의 시작 춘분(春分)을 축복하는 「서울봄맞이축제」에 대한 안내</a></td>
                                <td><a href="#">+</a></td>
                            </tr>
                            <tr>
                                <td>27<p>22/02</p>
                                </td>
                                <td><a href="#">2월 28일 오전 8시부터 11시까지 지구ON 서버 점검을 진행합니다.</a></td>
                                <td><a href="#">+</a></td>
                            </tr>
                            <tr>
                                <td>05<p>22/01</p>
                                </td>
                                <td><a href="#">2022년 새해 맞이 사이트 개편 안내사항</a></td>
                                <td><a href="#">+</a></td>
                            </tr>
                            <tr>
                                <td>24<p>21/12</p>
                                </td>
                                <td><a href="#">회원 여러분 즐거운 성탄절 보내세요~!</a></td>
                                <td><a href="#">+</a></td>
                            </tr>
                            <tr>
                                <td>25<p>21/11</p>
                                </td>
                                <td><a href="#">미세 플라스틱을 줄이기 위한 캠페인이 진행됩니다.</a></td>
                                <td><a href="#">+</a></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                <!-- //Notice__table -->

                <div class="board__search">
                    <div class="left">
                        <form action="boardSearch.php" name="boardSearch" method="get">
                            <fieldset>
                                <select name="searchOption" id="searchOption">
                                    <option value="title">전체</option>
                                    <option value="title">제목</option>
                                </select>
                                <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력해주세요!"
                                    aria-label="search" required>
                                <button type="submit" class="searchBtn">검색</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- //board__search -->
                <div class="board__pages">
                    <ul>
<?php
    $sql = "SELECT count(myNoticeBoardID) FROM myNoticeBoard";
    $result = $connect -> query($sql);

    $boardCount = $result -> fetch_array(MYSQLI_ASSOC);
    $boardCount = $boardCount['count(myNoticeBoardID)'];


    // 총 페이지 갯수
    $boardCount = ceil($boardCount / $viewNum);

    // echo $boardCount;

    // 현재 페이지를 기준으로 보여주고 싶은 갯수
    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;

    // 처음 페이지 초기화  (첫 페이지인 1을 기준으로 -4부터 나옴)
    if($startPage < 1) $startPage = 1;

    // 마지막 페이지 초기화
    if($endPage >= $boardCount) $endPage = $boardCount;

    // 이전 페이지, 처음 페이지로 이동
    if($page != 1){
        $prevPage = $page - 1;
        echo "<li><a href='boardNotice.php?page=1'>처음으로</a></li>";
        echo "<li><a href='boardNotice.php?page={$prevPage}'>이전</a></li>";
    }

    // 페이지 넘버 표시 (순서 중요! 가운데에 위치해야 함)
    for($i= $startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        echo "<li class='{$active}'><a href='boardNotice.php?page={$i}'>{$i}</a></li>";
    }

    // 다음 페이지, 마지막 페이지로 이동
    if($page != $endPage){
        $nextPage = $page + 1;
        echo "<li><a href='boardNotice.php?page={$nextPage}'>다음</a></li>";
        echo "<li><a href='boardNotice.php?page={$boardCount}'>마지막으로</a></li>";
    }
?>
                        <!-- <li><a href="#">처음으로</a></li>
                        <li><a href="#">&lt;&lt;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">&gt;&gt;</a></li>
                        <li><a href="#">마지막으로</a></li> -->
                    </ul>
                </div>
                <!-- //board__pages -->
            </div>
            <!-- //board__inner -->
        </section>
        <!-- //board -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../assets/js/header.js"></script>
<script src="../assets/js/custom.js"></script>
<script>
    
</script>

</html>