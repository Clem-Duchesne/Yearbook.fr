//File Reader to show Image after load
var inputPicture = document.getElementById("picture");
var container = document.getElementById("picture_click");
container.querySelector("#afterSelect").style.display = "none";

inputPicture.addEventListener("change", function readURL(e) {
  var reader = new FileReader();
  reader.onload = function() {
    var output = document.getElementById("afterSelect");
    output.src = reader.result;
  };
  reader.readAsDataURL(event.target.files[0]);
  container.querySelector("#afterSelect").style.display = "block";
  container.querySelector("#btnAddFond").style.display = " block";
  container.querySelector("#beforeSelect").style.display = "none";
});


