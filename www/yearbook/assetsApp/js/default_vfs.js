//Set Default Font Police for PDF
var polices = document.getElementsByClassName('font');
var n = polices.length;
(function (jsPDFAPI) { 
    "use strict";
    for(let i=0; i<n; i++){
        jsPDFAPI.addFileToVFS(polices[i].children[0].innerText, polices[i].children[2].innerText);
    }
})(jsPDF.API);


