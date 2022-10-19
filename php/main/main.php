<?php 
    include "../connect/connect.php";
    include "../connect/session.php";

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
?> 

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>지구ON 커뮤니티</title>

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
                <h2>가짜 게시판</h2>
                <p>아직 메인 페이지를 완성하지 못해 부득이하게 게시판 HTML만 복붙했습니다. <br> 
                    진짜 게시판으로 가시고 싶으시면 헤더의 커뮤니티를 클릭하여 가주시기 바랍니다.
                </p>
                <img src="../assets/img/board_img01.png" alt="커뮤니티 이미지">
            </div>
        </section>
        <!-- //banner -->

        <section id="board" class="container">
            <h2>이야기방</h2>
            <div class="board__inner">
                <div class="board__num">
                    <p>※ 총 <em>1215</em>건의 이야기가 있습니다.</p>
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
                            <tr>
                                <td data-table="num">1</td>
                                <td data-table="subject"><a href="#">푸른 숲을 위한 캠페인에 동참해 주세요~! (아마존 숲 보존을 위한 캠페인 참여)</a></td>
                                <td data-table="write">지구사랑 52</td>
                                <td data-table="date">2022-10-08</td>
                                <td data-table="views">38</td>
                            </tr>
                            <tr>
                                <td data-table="num">2</td>
                                <td data-table="subject"><a href="#">제로콜라로 지구를 구하는 방법에 대해 알려드립니다 😊😊</a></td>
                                <td data-table="write">제로 콜라 87</td>
                                <td data-table="date">2022-10-03</td>
                                <td data-table="views">66</td>
                            </tr>
                            <tr>
                                <td data-table="num">3</td>
                                <td data-table="subject"><a href="#">고속도로에서 죽어나가는 고라니들을 보호해주세요!! 엣취!!😣</a></td>
                                <td data-table="write">고라니 재채기2</td>
                                <td data-table="date">2022-09-27</td>
                                <td data-table="views">105</td>
                            </tr>
                            <tr>
                                <td data-table="num">4</td>
                                <td data-table="subject"><a href="#">푸른 숲을 위한 캠페인에 동참해주시면 꼬북이 워터렌즈를 이벤트로 드립니다!</a></td>
                                <td data-table="write">꼬북이 워터렌즈</td>
                                <td data-table="date">2022-09-22</td>
                                <td data-table="views">294</td>
                            </tr>
                            <tr>
                                <td data-table="num">5</td>
                                <td data-table="subject"><a href="#">지구사랑곽두팔님이 나가신다</a></td>
                                <td data-table="write">지구사랑곽두팔</td>
                                <td data-table="date">2022-09-17</td>
                                <td data-table="views">526</td>
                            </tr>
                            <tr>
                                <td data-table="num">6</td>
                                <td data-table="subject"><a href="#">우주최고헬창 헬스보이 업업 인사드립니다^^7</a></td>
                                <td data-table="write">헬스보이 업업</td>
                                <td data-table="date">2022-09-16</td>
                                <td data-table="views">462</td>
                            </tr>
                            <tr>
                                <td data-table="num">7</td>
                                <td data-table="subject"><a href="#">웹뽀~이 오늘부터 환경운동가가 되겠습니다 뽀~이♂</a></td>
                                <td data-table="write">웹보이♂BOY</td>
                                <td data-table="date">2022-09-12</td>
                                <td data-table="views">573</td>
                            </tr>
                            <tr>
                                <td data-table="num">8</td>
                                <td data-table="subject"><a href="#">웹GIRL~ 오늘부터 환경운동가가 되겠습니다 GIRL~♀</a></td>
                                <td data-table="write">웹걸♀GIRL</td>
                                <td data-table="date">2022-09-08</td>
                                <td data-table="views">483</td>
                            </tr>
                            <tr>
                                <td data-table="num">9</td>
                                <td data-table="subject"><a href="#">패스트 푸드점에서 빨대를 제공하지 않게 된 점이 너무 좋은 것 같네요..!</a></td>
                                <td data-table="write">김춘배</td>
                                <td data-table="date">2022-09-01</td>
                                <td data-table="views">396</td>
                            </tr>
                            <tr>
                                <td data-table="num">10</td>
                                <td data-table="subject"><a href="#">지구온 베스트 품목 공동구매합니다! 함께 하실 분 모집합니다^^</a></td>
                                <td data-table="write">지구사랑곽두팔</td>
                                <td data-table="date">2022-08-22</td>
                                <td data-table="views">263</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- //board__table -->
                
                <div class="board__search">
                    <div class="left">
                        <form action="boardSearch.php" name="boardSearch" method="get">
                            <fieldset>
                                <select name="searchOption" id="searchOption">
                                    <option value="title">전체</option>
                                    <option value="title">제목</option>
                                    <option value="title">작성자</option>
                                </select>
                                <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력해주세요!" aria-label="search" required>
                                <button type="submit" class="searchBtn">검색</button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="right">
                        <a href="boardWrite.php" class="btn">글쓰기</a>
                    </div>
                </div>
                <!-- //board__search -->
                <div class="board__pages">
                    <ul>
                        <li><a href="#">처음으로</a></li>
                        <li><a href="#">&lt;&lt;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">&gt;&gt;</a></li>
                        <li><a href="#">마지막으로</a></li>
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

    <?php include "../login/login.php" ?>
    <!-- //login -->

    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/header.js"></script>
</body>
</html>