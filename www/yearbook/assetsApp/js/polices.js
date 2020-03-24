var dataStyle;
var textArea;
var font;
var selectedOption;
var f = [];
var text = document.getElementsByClassName("text");
var menu = document.getElementById("text-menu");
var select = document.getElementById("font-select");
var layout = document.getElementsByClassName("layout");
var polices = document.getElementById("polices").value;
var page = document.getElementsByClassName("page");
polices = JSON.parse(polices);

for (let i = 0; i < polices.length; i++) {
    f.push(polices[i]["fontname_min"]);
}


var t = ["title", "right-text", "left-text", "middle-text", "bottom-text"];

function font_change(e) {
    if (e.target.classList[0] == "text") {
        textArea = e.target;
        dataStyle = textArea.getAttribute("data-style");
        var rect = textArea.getBoundingClientRect();

        font = textArea.getAttribute("class");
        //font = font.replace("text ", "");

        //menu.classList.toggle(dataStyle);
        var top = rect.top + e.target.clientHeight;
        menu.style.top = top + "px";
        menu.style.left = rect.left + "px";
        menu.classList.remove("hidden");

        for (let i = 0; i < 5; i++) {
            if (dataStyle != t[i]) {
                menu.classList.remove(t[i]);
            }
        }

        select.addEventListener("change", function () {

            choice = select.selectedIndex; // Récupération de l'index du <option> choisi
            selectedOption = select.options[choice].value;
            var lastClass = textArea.classList.length -1;
            textArea.classList.remove(textArea.classList[lastClass]);
            textArea.classList.add(selectedOption);

            for (let i = 0; i < 4; i++) {
                if (selectedOption != f[i]) {
                    textArea.classList.remove(f[i]);
                }
            }
        });
    } else {
        menu.classList.add("hidden");
    }
}
for (var i = 0; i < page.length; i++) {
    page[i].addEventListener("click", font_change);
}
