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
    <title>지구ON 커뮤니티 이야기방 - 검색 결과</title>

    <?php include "../include/link.php" ?>
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>

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
                <div class="board__num">
                    <!-- <p>※ 총 <em>1215</em>건의 이야기가 있습니다.</p> -->
<?php
    if(isset($_GET['page'])){
        $page = (int)$_GET['page'];
    } else {
        $page = 1;
    }
    function msg($alert){
        echo "<p>총 ".$alert."건이 검색되었습니다.</p>";
    }
    $searchKeyword = $_GET['searchKeyword'];
    $searchOption = $_GET['searchOption'];
    $searchKeyword = $connect -> real_escape_string(trim($searchKeyword));
    $searchOption = $connect -> real_escape_string(trim($searchOption));
    $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM myBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID)";
    switch($searchOption){
        case "title":
            $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC ";
            break;
        case "content":
            $sql .= "WHERE b.boardContents LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC ";
            break;
        case "name":
            $sql .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC ";
            break;
    }
    $result = $connect -> query($sql);
    // 전체 게시글 갯수 구하기
    $totalCount = $result -> num_rows;
    msg($totalCount);
?>
                </div>
                <div class="Story__table">
                    <table>
                        <colgroup>
                            <col style="width: 5%">
                            <col>
                            <col style="width: 12%">
                            <col style="width: 12%">
                            <col style="width: 8%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>제목</th>
                                <th>작성자</th>
                                <th>작성일</th>
                                <th>조회수</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
        $viewNum = 10;
        $viewLimit = ($viewNum * $page) - $viewNum;
        $sql = $sql."LIMIT {$viewLimit}, {$viewNum}";
        $result = $connect -> query($sql);

        if($result){
            $count = $result -> num_rows;

            if($count > 0){
                for($i=1; $i <= $count; $i++){
                    $info = $result -> fetch_array(MYSQLI_ASSOC);
                    echo "<tr>";
                    echo "<td>".$info['myBoardID']."</td>";
                    echo "<td><a href='boardView.php?myBoardID={$info['myBoardID']}'>".$info['boardTitle']."</a></td>";
                    echo "<td>".$info['youName']."</td>";
                    echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
                    echo "<td>".$info['boardView']."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>게시글이 없습니다.</td></tr>";
            }
        }
?>
                        </tbody>
                    </table>
                </div>
                <!-- //board__table -->

                <div class="board__pages">
                    <ul>
                    <?php
    // echo $totalCount;

    // 총 페이지 개수
    $boardCount = ceil($totalCount/$viewNum);

    // echo $boardCount;

    // 현재 페이지를 기준으로 보여주고 싶은 개수
    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;
    
    // 처음 페이지 초기화
    if($startPage < 1) $startPage = 1;
    
    // 마지막 페이지 초기화
    if($endPage >= $boardCount) $endPage = $boardCount;
    
    // 이전 페이지, 처음 페이지
    if($page != 1){
        $prevPage = $page - 1;
        echo "<li><a href='boardSearch.php?page=1&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>처음으로</a></li>";
        echo "<li><a href='boardSearch.php?page={$prevPage}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>이전</a></li>";
    }
    
    // 페이지 넘버 표시
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        echo "<li class='{$active}'><a href='boardSearch.php?page={$i}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>{$i}</a></li>";
    }
    
    // 다음 페이지, 마지막 페이지
    if($page != $endPage){
        $nextPage = $page + 1;
        echo "<li><a href='boardSearch.php?page={$nextPage}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>다음</a></li>";
        echo "<li><a href='boardSearch.php?page={$boardCount}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>마지막으로</a></li>";
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
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/header.js"></script>
</html>