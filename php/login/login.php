<div id="login__wrap">
    <div class="login__popup">
        <div class="login__inner">
            <div class="login__header">
                <h3>로그인</h3>
            </div>
            <div class="login__contents">
                <form name="login" action="../login/loginSave.php" method="post">
                    <fieldset>
                        <legend>로그인 입력폼</legend>
                        <div>
                            <label for="youEmail">이메일 주소</label>
                            <input type="email" name="youEmail" id="youEmail" placeholder="이메일 주소" class="input__style" required>
                        </div>
                        <div>
                            <label for="youPass">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                        </div>
                        <button type="submit" class="input__button">로그인</button>
                        <button type="submit" class="kakao__button">카카오 간편 로그인</button>
                    </fieldset>
                </form>
            </div>
    
            <div class="login__footer">
                <div class="btn">
                    <a href="../login/joinAgree.php">회원가입</a>
                    <a href="../login/find_ID.php">아이디 찾기</a>
                    <a href="../login/find_PW.php">비밀번호 찾기</a>
                </div>
                <ul class="desc">
                    <li>지구ON</li>
                </ul>
                <button type="button" class="btn-close"><span>닫기</span></button>
            </div>
        </div>
        <!-- //로그인창 -->
    </div>
    <!-- //로그인 팝업 -->
</div>
