var numPages = document.getElementsByClassName("numPage"),
    pages = document.getElementsByClassName("pages"),
    nbPages = pages.length - 1,
    nbNumPages = numPages.length - 1;
for (var i = 0; i < nbNumPages; i++) {
    numPages[i].addEventListener("click", function(e) {
        for (var j = 0; j < nbNumPages; j++) {
            pages[j].classList.add("hide");
        }
        for (var j = 0; j < nbNumPages; j++) {
            numPages[j].classList.remove("activ");
        }
        e.target.classList.add("activ");
        var numPage = e.currentTarget.getAttribute("data-page");

        var page = document.getElementById("pages" + numPage);
        page.classList.remove("hide");
    });
}
