function toggleSideNav () {
    var sideNav = document.getElementById("slide-out");
    sideNav.classList.toggle("datas-ocultas");
    sideNav.classList.toggle("datas-visivel");
}

document.getElementById("intervalo-personalizado").addEventListener("click", toggleSideNav);

/* acordion filtros nav */
var acc = document.getElementsByClassName("accordion-filtros-nav");

var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("afn-ativo");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}