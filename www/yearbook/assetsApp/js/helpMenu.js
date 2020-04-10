var btn = document.getElementById("question");
var helpPage = document.getElementById("helpPage");

btn.addEventListener("click", function() {
  helpPage.classList.toggle("open");
  this.classList.toggle("open");
});
