function toggleSideNav () {
    var sideNav = document.getElementById("slide-out");
    sideNav.classList.toggle("datas-ocultas");
    sideNav.classList.toggle("datas-visivel");
}

document.getElementById("intervalo-personalizado").addEventListener("click", toggleSideNav);