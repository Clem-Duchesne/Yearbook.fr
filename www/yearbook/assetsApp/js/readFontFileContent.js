//File Reader to rescue Content Font File after file and save it inside database

var font = document.getElementById('font');

font.addEventListener("change",function readURL(e){
  var reader = new FileReader();
  reader.onload = function(){
    var content = document.getElementById('content');
    console.log(reader.result);
    content.value = btoa(reader.result);
  }
  reader.readAsBinaryString(event.target.files[0]);
})