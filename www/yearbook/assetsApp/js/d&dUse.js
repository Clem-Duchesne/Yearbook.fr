var dAndD = new dAndD();

var dragable = document.getElementsByClassName("dragable"),
    zoneImage = document.getElementsByClassName("zoneImage"),
    page = document.getElementsByClassName("page"),
    html = document.querySelector("html");

for (var i = 0; i < dragable.length; i++) {
    dragable[i].addEventListener("mousedown", function(e) {
        dAndD.clickDragable(e);
        var src = dAndD.getSrc();
        console.log(src);
    });
}

html.addEventListener("mousemove", dAndD.mouveDouble);

html.addEventListener("mouseup", dAndD.wrongDrop);

for (var i = 0; i < zoneImage.length; i++) {
    zoneImage[i].addEventListener("mouseup", dAndD.goodDropImage);
}

for (var i = 0; i < page.length; i++) {
    page[i].addEventListener("mouseup", dAndD.goodDropPage);
}
