<header id="header">
    <h1><a href="../main/main.php"><img src="../assets/img/logo.png" alt="지구ON 로고"></a></h1>
    <nav class="header__nav">
        <ul class="clearfix">
            <li><a href="">지구ON 소개</a>
                <ul class="submenu">
                    <li><a href="#">스토리</a></li>
                </ul>
            </li>
            <li><a href="#">기후 소식</a>
                <ul class="submenu">
                    <li><a href="#">국내 뉴스</a></li>
                    <li><a href="#">해외 뉴스</a></li>
                    <li><a href="#">캠페인 & 이벤트</a></li>
                </ul>
            </li>
            <li><a href="#">기후 실천</a>
                <ul class="submenu">
                    <li><a href="#">실천 다이어리</a></li>
                    <li><a href="#">식물 키우기</a></li>
                </ul>
            </li>
            <li><a href="#">제로웨이스트</a>
                <ul class="submenu">
                    <li><a href="#">상품 추천</a></li>
                </ul>
            </li>
            <li><a href="../board/boardStory.php">커뮤니티</a>
                <ul class="submenu">
                    <li><a href="../board/boardNotice.php">공지사항</a></li>
                    <li><a href="../board/boardStory.php">이야기방</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- 반응형 전용 -->
    <nav class="mobile__nav">
        <?php if( isset($_SESSION['myMemberID']) ){ ?>
        <ul class="mobile__menuWrap">
            <li><a href="#" class="mobile_member_info"><?=$_SESSION['youName']?>님 환영합니다!</a></li>
        </ul>
        <?php } else { ?>
        <ul class="mobile__menuWrap">
            <li><a href="../login/join.php" class="mobile_member_info">회원가입 하러가기</a></li>
        </ul>
        <?php } ?>

        <ul class="mobile__menuWrap">
            <li><a href="#" class="big_menu">지구ON 소개</a>
                <ul class="m__submenu">
                    <li><a href="#">스토리</a></li>
                </ul>
            </li>
        </ul>
        <ul class="mobile__menuWrap">
            <li><a href="#" class="big_menu">기후 소식</a>
                <ul class="m__submenu">
                    <li><a href="#">국내 뉴스</a></li>
                    <li><a href="#">해외 뉴스</a></li>
                    <li><a href="#">캠페인 & 이벤트</a></li>
                </ul>
            </li>
        </ul>
        <ul class="mobile__menuWrap">
            <li><a href="#" class="big_menu">제로웨이스트</a>
                <ul class="m__submenu">
                    <li><a href="#">상품 추천</a></li>
                </ul>
            </li>
        </ul>
        <ul class="mobile__menuWrap">
            <li><a href="#" class="big_menu">커뮤니티</a>
                <ul class="m__submenu">
                    <li><a href="../board/boardNotice.php">공지사항</a></li>
                    <li><a href="../board/boardStory.php">이야기방</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="header__login">
    <?php if( isset($_SESSION['myMemberID']) ){?>
        <a href="#" class="header__member"><?=$_SESSION['youName']?>님 환영합니다!</a>
        <a href="../login/logout.php">로그아웃</a>
    <?php } else {?>
        <a href="#">로그인</a>
    <?php }?>
    </div>
    <div class="header__ham">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>
<!-- // header-->