$(document).ready(function(){
    //Declaration des variables
    var img;
    var font;
    var element;
    var titles = [];
    var leftTexts = [];
    var rightTexts = [];
    var bottomTexts = [];
    var fonds = [];
    var images = [];
    var mypage;
    var layout;
    var title;
    var leftText;
    var rightText;
    var bottomText;
    var fond;
    var myimage;
    var dimensionPosition = [];
    var splitText;
    var left;
    var myText;
    var image;

    //Récupération de toutes les données des tableaux à partir de la page de visualisation
    for(let i=1;i<61;i++){
        if(document.getElementById('fond' + i)){
            fond = document.getElementById('fond' + i);
            fonds.push(fond);
        }
        else{
            fond ='';
            fonds.push(fond); 
        }
        mypage = $('#page' + i);

        layout = mypage.find($('.activLayout'));
        if(layout.find('.imageOnPage')){
            myimage = layout.find('.imageOnPage');
            if(myimage.length > 0){
                image = [];
                for(let i=0; i<myimage.length;i++){
                    temp = [myimage[i], (myimage[i].width)*0.4, (myimage[i].height)*0.4, (myimage[i].naturalWidth*0.4), (myimage[i].naturalHeight*0.4)];
                    console.log(myimage);
                    image.push(temp);

                }
            
            images.push(image); 
            }
            else{
                image = [];
               images.push(image);
            }
        }
        else
        {
               image = [];
               images.push(image);
        }
        
        if(layout.find('.title')){
            title = layout.find('.title');
            if(title[0]!= undefined){
                InnerHTML = title[0].innerText;
                FontFamily = title[0].classList[2];
                FontSize = 25.6;
            }
            else{
                InnerHTML = '';
                FontFamily = '';
                FontSize = 0;
            }
            
            
            title = [InnerHTML, FontFamily, FontSize];
            titles.push(title);
        }

        else
        {
            title = ['','',''];
            titles.push(title);
        }
        if(layout.find('.left-text')){
            leftText = layout.find('.left-text');
            if(leftText[0]!= undefined){
                InnerHTML = leftText[0].innerHTML;
                FontFamily = leftText[0].classList[2];
                FontSize = 17.6;
            }
            else{
                InnerHTML = '';
                FontFamily = '';
                FontSize = 0;
            }
            
            leftText = [InnerHTML, FontFamily, FontSize];
            leftTexts.push(leftText);
        }

        else
        {
            leftText = ['','',''];
            leftTexts.push(leftText);
        }

        if(layout.find('.right-text')){
            rightText = layout.find('.right-text');
            if(rightText[0]!= undefined){
                InnerHTML = rightText[0].innerHTML;
                FontFamily = rightText[0].classList[2];
                FontSize = 17.6;
            }
            else{
                InnerHTML = '';
                FontFamily = '';
                FontSize = 0;

            }
            
            rightText = [InnerHTML, FontFamily, FontSize];
            rightTexts.push(rightText);
        }

        else
        {
            rightText = ['','',''];
            rightTexts.push(rightText);
        }

        if(layout.find('.bottom-text')){
            bottomText = layout.find('.bottom-text');
            if(bottomText[0]!= undefined){
                InnerHTML = bottomText[0].innerHTML;
                FontFamily = bottomText[0].classList[2];
                FontSize = 16;
            }
            else{
                InnerHTML = '';
                FontFamily = '';
                FontSize = 0;
            }
            
            bottomText = [InnerHTML, FontFamily, FontSize];
            bottomTexts.push(bottomText);
        }

        else
        {
            bottomText = ['','',''];
            bottomTexts.push(bottomText);
        }
    }

    var exportBtn = $("#cmd");
    exportBtn.click(function(){
        //Réglage du pdf en format paysage
        var doc = new jsPDF('l');
        //Réglage du pdf en multipage
        var options = {
             pagesplit: true
        };
        //Ajout des polices par défaut du pdf (rélié au fichier default_vfs)
        var polices = document.getElementsByClassName('font');
        for(let i=0;i<polices.length;i++){
            doc.addFont(polices[i].children[0].innerText, polices[i].children[1].innerText,'normal');
       }
       //Mise en palce du traitement pdf pour la construction de chaque page
        for(let i=0;i<63;i++){
            if(i>=59){
                var img = fonds[0];
                    //Génération d'un screenshot du fond
                    html2canvas(img, {
                        dpi: 300, // Set to 300 DPI
                        scale: 3, // Adjusts your resolution
                        onrendered: function(canvas) {
                            img = canvas.toDataURL("image/jpeg", 1);
                        } 
                    });
                    //Ajout du fond dans le pdf
                    doc.addImage(img,'JPEG', 0,0,297,210);
                    if(i<62){
                        doc.addPage();
                    }
                   
            }
            else{            
                if(fonds[i] != ''){
                    var img = fonds[i];
                    //Génération d'un screenshot du fond
                    html2canvas(img, {
                        dpi: 300, // Set to 300 DPI
                        scale: 3, // Adjusts your resolution
                        onrendered: function(canvas) {
                            img = canvas.toDataURL("image/jpeg", 1);
                        } 
                    });
                    //Ajout du fond dans le pdf
                    doc.addImage(img,'JPEG', 0,0,297,210);
                    
                }
                n = images[i].length;
                
                
                //Définition des dimensions et positions des images en fonction du layout actif
                if(n>0){
                    
                            if(n==1){
                                
                                dimensionPosition = [[148.5 - ((((100 * images[i][0][3])/images[i][0][4]))/(2*1.12)), 35, (100 * images[i][0][3])/images[i][0][4], 100]];
                            }
                            if(n==2){

                            dimensionPosition = [[148.5 - ((((100 * images[i][0][3])/images[i][0][4]))/(2*1.12)),15,(85 * images[i][0][3])/images[i][0][4],85],[148.5 - ((((100 * images[i][1][3])/images[i][1][4]))/(2*1.12)),110,(85 * images[i][1][3])/images[i][1][4],85]];
                            }
                            if(n==4){
                                dimensionPosition = [[79 - ((((100 * images[i][0][3])/images[i][0][4]))/(2*1.12)),20,(80 * images[i][0][3])/images[i][0][4],80],[218.5 - ((((100 * images[i][1][3])/images[i][1][4]))/(2*1.12)),20,(80 * images[i][1][3])/images[i][1][4],80],[79 - ((((100 * images[i][2][3])/images[i][2][4]))/(2*1.12)),110,(80 * images[i][2][3])/images[i][2][4],80],[218.5 - ((((100 * images[i][3][3])/images[i][3][4]))/(2*1.12)),110,(80 * images[i][3][3])/images[i][3][4],80]];
                            }
                            
                            for(let j=0;j<n;j++){
                                img = images[i][j][0];
                                //Géénératio nscreenshot des images
                                html2canvas(img, {
                                    dpi: 300, // Set to 300 DPI
                                    scale: 3, // Adjusts your resolution
                                    onrendered: function(canvas) {
                                        img = canvas.toDataURL("image/jpg", 1);
                                    } 
                                });
                                //ajout de l'image avec réglége sur sa dimension et sa position dans la page
                                doc.addImage(img,'JPG', dimensionPosition[j][0],dimensionPosition[j][1],dimensionPosition[j][2],dimensionPosition[j][3]); 
                                //Définition des bordures autour de l'image
                                doc.setDrawColor(255, 255, 255);
                                doc.setLineWidth(4);
                                doc.line(dimensionPosition[j][0] - 1,dimensionPosition[j][1],dimensionPosition[j][0] + dimensionPosition[j][2] + 3,dimensionPosition[j][1]);
                                doc.line(dimensionPosition[j][0] + 1,dimensionPosition[j][1],dimensionPosition[j][0] + 1,dimensionPosition[j][3]+ dimensionPosition[j][1]);
                                doc.line(dimensionPosition[j][0] + dimensionPosition[j][2] + 1,dimensionPosition[j][1],dimensionPosition[j][0] + dimensionPosition[j][2] + 1,dimensionPosition[j][3] + dimensionPosition[j][1]);
                                doc.line(dimensionPosition[j][0] - 1,dimensionPosition[j][3] + dimensionPosition[j][1],dimensionPosition[j][0] + dimensionPosition[j][2] + 3,dimensionPosition[j][3] + dimensionPosition[j][1]);

                            }
                    
                }
                
                //Définition de la police pour le titre
                doc.setFont(titles[i][1]);
                doc.setFontSize(titles[i][2]);  
                myText = titles[i][0];

                if((myText.length -1) < 55){
                    //Centrage du texte
                    left = (myText.length -1)/2 * 0.4;
                    left = 11.4 - left;
                    left = 30 + left * 10;
                    doc.text(left, 20,  titles[i][0]);
                }
                else
                {
                    splitText = doc.splitTextToSize(myText, 180);
                    for(let i =0; i<splitText.length; i++){
                        myText = splitText[i];
                        //Centrage du texte
                        left = (myText.length -1)/2 * 0.4;
                        left = 11.4 - left;
                        left = 30 + left * 10;
                        doc.text(left, 20 + i*10,  myText);
                    }
                }

                doc.setFont(leftTexts[i][1]);
                    doc.setFontSize(leftTexts[i][2]);
                    myText = leftTexts[i][0];
                    //Centrage du texte
                    left = (myText.length -1)/2 * 0.24;
                    left = 3.7 - left;
                    left = left * 10;
                    doc.text(left,90, leftTexts[i][0]);


                    doc.setFont(rightTexts[i][1]);
                    doc.setFontSize(rightTexts[i][2]);
                    myText = rightTexts[i][0];
                    //Centrage du texte
                    left = (myText.length -1)/2 * 0.24;
                    left = 22.2 + left;
                    left = left * 10;
                    doc.text(left,90, rightTexts[i][0]);

    
                    doc.setFont(bottomTexts[i][1]);
                    doc.setFontSize(bottomTexts[i][2]);
                    myText = bottomTexts[i][0];

                if((myText.length -1) < 90){
                    //Centrage du texte
                    left = (myText.length -1)/2 * 0.25;
                    left = 11.4 - left;
                    left = 25 + left * 10;
                    doc.text(left, 150,  bottomTexts[i][0]);
                }
                
                else
                {
                    splitText = doc.splitTextToSize(myText, 175);
                    for(let i =0; i<splitText.length; i++){
                        myText = splitText[i];
                        //Centrage du texte
                        left = (myText.length -1)/2 * 0.24;
                        left = 11.4 - left;
                        left = 25 + left * 10;
                    
                        doc.text(left, 150 + i*7,  myText);
                    }
                }

                doc.addPage();
            }
        }
        doc.output('blob');
        doc.save('Yearbook.pdf');
        var blob = doc.output('datauri');
        var pdf = document.getElementById('pdf');
        pdf.innerText = blob;
    });


})
        

