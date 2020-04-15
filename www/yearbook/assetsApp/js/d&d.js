var dAndD = function() {
    /* Variable prive */
    var objDrag;
    var src;
    var drag_zone = document.getElementById("drag_zone");
    var layouts = document.getElementById("layout");
    var nbLayout = layouts.children.length;
    var type;

    /* Function public */

    function clickDragable(e) {
        //definit l'element qui est en cours de drag
        setObjDrag(e.target);

        //recuperation du type de contenu que cette element represente
        setType(objDrag.getAttribute("data-content"));

        //definit la source de l'image de cette objet
        setSrc(e.target.currentSrc);

        // Si cet element represente un layout, alors on enregistre quel est le layout concerné
        if (objDrag.getAttribute("data-content") == "layoutico") {
            layout = objDrag.getAttribute("data-layout");
        }
    }

    function copyDouble(e) {
        // Creation d'un element img
        var image_move_creator = document.createElement("IMG");
        image_move_creator.src = src;
        image_move_creator.id = "image_move";
        image_move_creator.draggable = "false";
        image_move_creator.setAttribute("data-type", getType);
        drag_zone.appendChild(image_move_creator);

        // Creation visuellement de l'element
        var image_move = document.getElementById("image_move");
        var x = -1000,
            y = -1000;
        image_move.style.top = y + "px";
        image_move.style.left = x + "px";
    }

    function mouveDouble(e) {
        if (objDrag != undefined) {
            // Recuperation des coordonnées du curseur et deplacement de l'element "double" en fonction de ces coordonées
            var image_move = document.getElementById("image_move");
            var width = image_move.width;
            var height = image_move.height;
            var x = e.clientX - width / 2,
                y = e.clientY - height / 2;
            image_move.style.top = y + "px";
            image_move.style.left = x + "px";
        }
    }

    function wrongDrop() {
        // Verification de l'endroit ou le drop a eu lieu et destruction du double si le lieu est pas celui qui convient 
        if (objDrag != undefined) {
            if (objDrag.getAttribute("data-content") == "layoutico") {
                layout = undefined;
            }
            src = "";
            drag_zone.innerHTML = "";
            type = "";
            unsetObjDrag();
        }
    }

    function goodDropImage(e) {
        // Verification de l'endroit ou le drop a eu lieu puis creation de l'image drag dans l'element prevu a cet effet
        if (
            objDrag != undefined &&
            objDrag.getAttribute("data-content") == "image"
        ) {
            var image_creator = document.createElement("IMG");
            image_creator.src = src;
            image_creator.className = "imageOnPage";
            image_creator.draggable = "false";
            if (e.target.localName == "img") {
                e.currentTarget.parentNode.querySelector(
                    ".zoneImage"
                ).innerHTML = "";

                e.currentTarget.parentNode
                    .querySelector(".zoneImage")
                    .prepend(image_creator);
            } else {
                e.target.prepend(image_creator);
            }

            src = "";
            type = "";
        }
    }

    function goodDropPage(e) {
        // Verification de l'endroit ou le drop a eu lieu puis changement de layout ou de fond en fonction du type d'element en cour de drag
        if (type == "layoutico") {
            for (var i = 0; i < nbLayout; i++) {
                e.currentTarget.children[i].classList.add("hide");
            }
            e.currentTarget
                .querySelector("#layout" + layout)
                .classList.remove("hide");
        } else if (type == "fond") {
            var fond_creator = document.createElement("IMG");
            fond_creator.src = src;
            fond_creator.className = "fondPage";
            fond_creator.draggable = "false";
            e.currentTarget.appendChild(fond_creator);
        }
        type = "";
    }

    /* Function prive */
    function setSrc(currentSrc) {
        src = currentSrc;
    }
    function setObjDrag(currentObjDrag) {
        objDrag = currentObjDrag;
    }
    function getObjDrag() {
        return objDrag;
        objDrag = undefined;
    }
    function unsetObjDrag() {
        objDrag = undefined;
    }
    function getSrc() {
        return src;
        src = "";
    }

    function setType(currentType) {
        type = currentType;
    }
    function getType() {
        return type;
    }
    return {
        copyDouble: copyDouble,
        clickDragable: clickDragable,
        mouveDouble: mouveDouble,
        wrongDrop: wrongDrop,
        goodDropImage: goodDropImage,
        goodDropPage: goodDropPage,
        getSrc: getSrc,
        getType: getType,
        getObjDrag: getObjDrag
    };
};
