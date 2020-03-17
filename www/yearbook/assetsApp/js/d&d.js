var dAndD = function() {
  /* Variable prive */
  var objDrag;
  var src;
  var drag_zone = document.getElementById("drag_zone");
  var layouts = document.getElementById("layout");
  var nbLayout = layouts.children.length;

  /* Function public */

  function clickDragable(e) {
    setObjDrag(e.target);

    setSrc(e.target.currentSrc);
    if (objDrag.getAttribute("data-content") == "layoutico") {
      layout = objDrag.getAttribute("data-layout");
    }
    copyDouble(e, src);
  }

  function mouveDouble(e) {
    if (objDrag != undefined) {
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
    if (objDrag != undefined) {
      if (objDrag.getAttribute("data-content") == "layoutico") {
        layout = undefined;
      }
      src = "";
      drag_zone.innerHTML = "";
      unsetObjDrag();
    }
  }

  function goodDropImage(e) {
    if (
      objDrag != undefined &&
      objDrag.getAttribute("data-content") == "image"
    ) {
      var image_creator = document.createElement("IMG");
      image_creator.src = src;
      image_creator.className = "imageOnPage";
      image_creator.draggable = "false";
      e.currentTarget.appendChild(image_creator);
      src = "";
    }
  }

  function goodDropPage(e) {
    var type = getContentType();
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
  }

  /* Function prive */
  function copyDouble(e, src) {
    var image_move_creator = document.createElement("IMG");
    image_move_creator.src = src;
    image_move_creator.id = "image_move";
    image_move_creator.draggable = "false";
    drag_zone.appendChild(image_move_creator);
    var image_move = document.getElementById("image_move");
    var width = image_move.width;
    var height = image_move.height;
    var x = e.clientX - width / 2,
      y = e.clientY - height / 2;
    image_move.style.top = y + "px";
    image_move.style.left = x + "px";
  }
  function setSrc(currentSrc) {
    src = currentSrc;
  }
  function setObjDrag(currentObjDrag) {
    objDrag = currentObjDrag;
  }
  function unsetObjDrag() {
    objDrag = undefined;
  }
  function getContentType() {
    return objDrag.getAttribute("data-content");
  }
  function getSrc() {
    return src;
    src = "";
  }
  return {
    clickDragable: clickDragable,
    mouveDouble: mouveDouble,
    wrongDrop: wrongDrop,
    goodDropImage: goodDropImage,
    goodDropPage: goodDropPage,
    getSrc: getSrc
  };
};
