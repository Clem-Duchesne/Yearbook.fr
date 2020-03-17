outils = document.getElementsByClassName("outil");
for (var i = 0; i < outils.length; i++) {
  outils[i].addEventListener("click", function(e) {
    for (var j = 0; j < outils.length; j++) {
      outils[j].classList.remove("activ");
    }
    e.target.parentNode.classList.add("activ");
    var contenu = e.target.parentNode.getAttribute("data-contenus");
    var subMenu = document.getElementById(contenu);
    for (var j = 0; j < subMenu.parentNode.children.length; j++) {
      subMenu.parentNode.children[j].classList.add("hide");
    }
    subMenu.classList.remove("hide");
  });
}
