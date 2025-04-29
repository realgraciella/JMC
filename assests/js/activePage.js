// This code will add the class active to the li of sidebar when we click the links(Dashboard, Employee, etc)

const currentUrl = window.location.pathname;
const sidebarLinks = document.querySelectorAll(".sidebar-contents ul li a");

sidebarLinks.forEach(link => {
    if (currentUrl.includes(link.getAttribute("href"))) {
        link.parentElement.classList.add('active');
    }
});
