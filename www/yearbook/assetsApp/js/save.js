var dd = new dAndD();

//Variables pour l'enregistrement des textes
var input = document.getElementsByTagName("input");
var textarea = document.getElementsByTagName("textarea");
var url = document.querySelector(".url_text").getAttribute("href");

//Variables pour l'enregistrement des images
var zoneImage = document.getElementsByClassName("zoneImage");
var url_img = document.querySelector(".url_img").getAttribute("href");

//Variables pour l'enregistrement des fonds
var page = document.getElementsByClassName("page");
var url_background = document
  .querySelector(".url_background")
  .getAttribute("href");
var dragable = document.getElementsByClassName("dragable");

//Variables pour la suppression des images
var deleteImg = document.getElementsByClassName("deleteImage");
var url_removeImg = document
  .querySelector(".url_removeImg")
  .getAttribute("href");

//Fonction avec ajax pour enregistrer les textes (input et textarea)
function save_changes(e) {
  let text = e.target.value;
  let style = e.target.getAttribute("data-style");
  let font = e.target.classList[2];
  let layout_text = e.target.closest(".layout").id;
  let page_text = e.target.closest(".page").id;

  $.ajax({
    url: url,
    type: "GET",
    dataType: "text",
    data: {
      content: text,
      "data-style": style,
      layout: layout_text,
      pages: page_text,
      font: font
    },
    success: function(a, statut) {
      console.log("success" + a);
    },
    error: function(resultat, statut, erreur) {
      console.log(erreur);
    }
  });
}

//Mise en place des event Listener (texte qui change) pour tous les input et textarea
for (let i = 0; i < input.length; i++) {
  input[i].addEventListener("input", save_changes);
}

for (let i = 0; i < textarea.length; i++) {
  textarea[i].addEventListener("change", save_changes);
}

//Fonction pour enregistrer les changements dans les zones images
function save_changes_img(e) {
  let objDrag = dd.getObjDrag();
  console.log(objDrag);
  if (objDrag != undefined && objDrag.getAttribute("data-content") == "image") {
    objDrag = undefined;
    if (e.target.localName == "img") {
      var cellule = e.target.parentNode.getAttribute("data-image");
    } else {
      var cellule = e.target.getAttribute("data-image");
    }
    let layout = e.target.closest(".layout").id;
    let page = e.target.closest(".page").id;
    let img = bg;
    $.ajax({
      url: url_img,
      type: "POST",
      dataType: "text",
      data: {
        cellule: cellule,
        layout: layout,
        page: page,
        img: img
      },
      success: function(a, statut) {
        console.log("success" + a);
      },
      error: function(resultat, statut, erreur) {
        console.log(erreur);
      }
    });
  }
}

//Mise en place des Event Listener (lacher le clic) pour les images
for (let i = 0; i < zoneImage.length; i++) {
  zoneImage[i].addEventListener("mouseup", function(e) {
    if (dd.getType() == "image") {
      save_changes_img(e);
    }
  });
}

for (let j = 0; j < dragable.length; j++) {
  dragable[j].addEventListener("mousedown", dd.clickDragable);
  dragable[j].addEventListener("mousedown", function() {
    bg = dd.getSrc();
  });
}

//Mise en place des Event Listener (lacher le clic) pour les fonds
for (let i = 0; i < page.length; i++) {
  page[i].addEventListener("mouseup", function(e) {
    if (dd.getType() == "fond") {
      save_changes_bg(e);
    }
  });
}

//Fonction pour enregistrer les changements de fond des pages
function save_changes_bg(e) {
  let page = e.target.closest(".page");
  let page_id = page.id;
  let background = bg;

  $.ajax({
    url: url_background,
    type: "POST",
    dataType: "text",
    data: {
      page: page_id,
      fond: background
    },
    success: function(a, statut) {
      console.log("success" + a);
    },
    error: function(resultat, statut, erreur) {
      console.log(erreur);
    }
  });
}

//Fonction pour supprimer les images déjà enregistrées
function remove_img(e) {
  let layout = e.target.closest(".layout").id;
  let page = e.target.closest(".page").id;
  let div = e.target.closest(".zoneImage");
  let cellule = div.getAttribute("data-image");
  let img = e.target.nextElementSibling;

  $.ajax({
    url: url_removeImg,
    type: "POST",
    dataType: "text",
    data: {
      page: page,
      layout: layout,
      cellule: cellule
    },
    success: function(a, statut) {
      if (img != null) {
        img.remove();
        console.log(1);
      } else {
        div = div.children;
        for (let i = 0; i < div.length; i++) {
          if (div[i].classList.contains("imageOnPage")) {
            div[i].remove();
          }
        }
      }
    },
    error: function(resultat, statut, erreur) {
      console.log(erreur);
    }
  });
}

console.log(url_removeImg);

//Mise en place des Event Listener pour la suppression d'images
for (let i = 0; i < deleteImg.length; i++) {
  deleteImg[i].addEventListener("click", remove_img);
}
