var dd = new dAndD();

//Variables pour l'enregistrement des textes
var input = document.getElementsByTagName("input");
var textarea = document.getElementsByTagName("textarea");
let url = document.querySelector(".url_text").getAttribute("href");

//Variables pour l'enregistrement des images
var zoneImage = document.getElementsByClassName("zoneImage");
var url_img = document.querySelector(".url_img").getAttribute("href");

//Variables pour l'enregistrement des fonds
var page = document.getElementsByClassName("page");
var url_background = document
    .querySelector(".url_background")
    .getAttribute("href");
var dragable = document.getElementsByClassName("dragable");

//Fonction avec ajax pour enregistrer les textes (input et textarea)
function save_changes(e) {
    let text = e.target.value;
    let style = e.target.getAttribute("data-style");
    let font = e.target.className;
    let layout = e.target.closest(".layout").id;
    let page = e.target.closest(".page").id;

    $.ajax({
        url: url,
        type: "GET",
        dataType: "text",
        data: {
            content: text,
            "data-style": style,
            layout: layout,
            pages: page,
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
    input[i].addEventListener("change", save_changes);
}

for (let i = 0; i < textarea.length; i++) {
    textarea[i].addEventListener("change", save_changes);
}

//Fonction pour enregistrer les changements dans les zones images
function save_changes_img(e) {
    let cellule = e.target.getAttribute("data-image");
    let layout = e.target.closest(".layout").id;
    let page = e.target.closest(".page").id;
    let img = bg;
    console.log(bg);
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

//Mise en place des Event Listener (lacher le clic) pour les images
for (let i = 0; i < zoneImage.length; i++) {
    zoneImage[i].addEventListener("mouseup", save_changes_img);
}

//Mise en place des Event Listener (lacher le clic) pour les fonds
for (let i = 0; i < page.length; i++) {
    page[i].addEventListener("mouseup", save_changes_bg);
}

for (let j = 0; j < dragable.length; j++) {
    dragable[j].addEventListener("mousedown", dd.clickDragable);
    dragable[j].addEventListener("mousedown", function() {
        bg = dd.getSrc();
        console.log(bg);
    });
}

//Fonction pour enregistrer les changements de fond des layouts
function save_changes_bg(e) {
    let page = e.target.closest(".page");
    let page_id = page.id;

    $.ajax({
        url: url_background,
        type: "POST",
        dataType: "text",
        data: {
            page: page_id,
            fond: bg
        },
        success: function(a, statut) {
            console.log("success" + a);
        },
        error: function(resultat, statut, erreur) {
            console.log(erreur);
        }
    });
}
