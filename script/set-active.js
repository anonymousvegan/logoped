function setActive(n){
    const nav = document.getElementById("horisontal-nav");
    const activeNav = nav.querySelectorAll(".nav-link")[n];
    activeNav.classList.add("active")
    const verticalNav = document.getElementById("vertical-nav");
    const verticalActiveNav = verticalNav.querySelectorAll(".nav-link")[n];
    verticalActiveNav.classList.add("active")
}