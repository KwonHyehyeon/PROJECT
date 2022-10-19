    // 메뉴 버튼 (반응형)
    const btnHam = document.querySelector(".header__ham");
    const btnHamText = document.querySelector(".menu__text");
    const btnMenu = document.querySelector(".mainpage__nav");
    const btnMenuList = btnMenu.querySelectorAll(".mainpage__nav ul li a");

    btnHam.addEventListener("click", () => {
        btnHam.classList.toggle("active");
        btnMenu.classList.toggle("active");
        document.body.classList.toggle("fixed");
    });

    btnHamText.addEventListener("click", () => {
        btnHam.classList.toggle("active");
        btnMenu.classList.toggle("active");
        document.body.classList.toggle("fixed");
    });

    // 반응형에서 메뉴 버튼 누르는 즉시 메뉴창 닫히게 하기
    btnMenuList.forEach((list) => {
        list.addEventListener("click", () => {
            document.body.classList.remove("fixed");
            btnHam.classList.remove("active");
            btnMenu.classList.remove("active");
        });
    });

    window.addEventListener('DOMContentLoaded', event => {

        // Navbar shrink function
        var navbarShrink = function () {
            const navbarCollapsible = document.body.querySelector('#header');
            if (!navbarCollapsible) {
                return;
            }
            if (window.scrollY === 0) {
                navbarCollapsible.classList.remove('navbar-shrink')
            } else {
                navbarCollapsible.classList.add('navbar-shrink')
            }
    
        };
    
        // Shrink the navbar 
        navbarShrink();
    
        // Shrink the navbar when page is scrolled
        document.addEventListener('scroll', navbarShrink);
    
        // Activate Bootstrap scrollspy on the main nav element
        const mainNav = document.body.querySelector('#mainNav');
        if (mainNav) {
            new bootstrap.ScrollSpy(document.body, {
                target: '#mainNav',
                offset: 74,
            });
        };
    
        // Collapse responsive navbar when toggler is visible
        const navbarToggler = document.body.querySelector('.navbar-toggler');
        const responsiveNavItems = [].slice.call(
            document.querySelectorAll('#navbarResponsive .nav-link')
        );
        responsiveNavItems.map(function (responsiveNavItem) {
            responsiveNavItem.addEventListener('click', () => {
                if (window.getComputedStyle(navbarToggler).display !== 'none') {
                    navbarToggler.click();
                }
            });
        });
    
        // Activate SimpleLightbox plugin for portfolio items
        new SimpleLightbox({
            elements: '#portfolio a.portfolio-box'
        });
    
    });