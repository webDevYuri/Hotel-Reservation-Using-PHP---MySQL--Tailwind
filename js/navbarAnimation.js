function changeNavbarElementsDesign() {
    const navbar = document.getElementsByClassName("navbar")[0];
    const headerTopElements = document.getElementsByClassName("header-top-element")[0];
    const headerHr = document.getElementsByClassName("header-hr")[0];
    const navLinks = document.querySelectorAll(".nav-link");
    const navLinkList = document.getElementsByClassName("nav-link-list")[0];
    const brandImage = document.getElementsByClassName("logo-image")[0];

    const scrollThreshold = 50; 

    if(window.pageYOffset > scrollThreshold) {
        navbar.style.backgroundColor = 'rgba(240, 253, 244, 0.3)';
        navbar.style.boxShadow = 'rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px';
        navbar.style.backdropFilter = 'blur(15px)';
        headerTopElements.style.display = 'none';
        headerHr.style.display = 'none';
        brandImage.style.width = '100px';
        brandImage.style.transform = 'rotate(360deg)';

        navLinks.forEach(navLink => {
            navLink.style.color = 'rgb(5 46 22)';
        });

        navLinkList.classList.remove('p-10');
        navLinkList.classList.add('p-5');

    } else {
        navbar.style.backgroundColor = '';
        navbar.style.boxShadow = '';
        navbar.style.backdropFilter = '';
        headerTopElements.style.display = '';
        headerHr.style.display = '';
        brandImage.style.width = '';
        brandImage.style.transform = '';

        navLinks.forEach(navLink => {
            navLink.style.color = '';
        });

        navLinkList.classList.remove('p-5');
        navLinkList.classList.add('p-10');
    }
}

document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('scroll', changeNavbarElementsDesign);
});