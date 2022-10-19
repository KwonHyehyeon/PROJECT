// 로그인 버튼
const loginBtn = document.querySelector(".header__login");
const loginPopup = document.querySelector(".login__popup");
const loginClose = document.querySelector(".login__footer > .btn-close");

loginBtn.addEventListener("click", () => {
    loginPopup.classList.add("open");
});

loginClose.addEventListener("click", () => {
    loginPopup.classList.remove("open");
});

// 닫기 버튼
const backToHomeBtn = document.querySelector(".btn-home");

backToHomeBtn.addEventListener("click", () => {
    location.href('../main/main.php');
});