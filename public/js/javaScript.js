document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
document.body.scrollTop = 0; // For Safari

window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}

document.getElementById("img").onclick = function() {ativarMenu()};

function ativarMenu() {
  document.getElementById("sideBar").style.marginLeft = "0%";

}

// RESPONSIVIDADE

const responsividade = window.matchMedia("(max-width: 1023px)");
metodoResponsivo(responsividade);

function metodoResponsivo() {
  document.getElementById("sideBar").onclick = function() {desativarMenu()}
  
  function desativarMenu() {
    document.getElementById("sideBar").style.marginLeft = "-22%";
  
  }

}