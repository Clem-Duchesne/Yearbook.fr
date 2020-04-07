$(document).ready(function(){


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
    //Récupération de toutes les données
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
           var image = layout.find('.imageOnPage');
           var n = image.length;
           if(n != 0){
                   images.push(image);
           }
           else
           {
               image[i] = '';
               images.push(image);
           }
        }
        
        if(layout.find('.title')){
            title = layout.find('.title');
            if(title[0]!= undefined){
                InnerHTML = title[0].innerHTML;
            }
            else{
                InnerHTML = '';
            }
            FontFamily ='test';
            //FontFamilytitle = title[0].classlist[2];
            FontSize = 25.6;
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
            }
            else{
                InnerHTML = '';
            }
            FontFamily ='test';
            //FontFamilytitle = title[0].classlist[2];
            FontSize = 17.6;
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
            }
            else{
                InnerHTML = '';
            }
            FontFamily ='test';
            //FontFamilytitle = title[0].classlist[2];
            FontSize = 17.6;
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
            }
            else{
                InnerHTML = '';
            }
            FontFamily ='test';
            //FontFamilytitle = title[0].classlist[2];
            FontSize = 16;
            bottomText = [InnerHTML, FontFamily, FontSize];
            bottomTexts.push(bottomText);
        }

        else
        {
            bottomText = ['','',''];
            bottomTexts.push(bottomText);
        }
    }
    //Mise en place du pdf
    console.log(fonds);
    var exportBtn = $("#cmd");
    exportBtn.click(function(){
        var doc = new jsPDF('l');
        var options = {
             pagesplit: true
        };
        
        for(let i=0;i<59;i++){
            if(fonds[i] != ''){
                var img = fonds[i];

                html2canvas(img, {
                    dpi: 300, // Set to 300 DPI
                    scale: 3, // Adjusts your resolution
                    onrendered: function(canvas) {
                        img = canvas.toDataURL("image/jpeg", 1);
                    } 
                });
                doc.addImage(img,'JPEG', 0,0,297,210);
                
            }
            n = images[i].length;
            if(n>0){
                        if(n==1){
                            dimensionPosition = [[85, 35, 120, 100]];
                        }
                        if(n==2){
                        dimensionPosition = [[85,20,130,80],[85,110,130,80]];
                        }
                        if(n==4){
                            dimensionPosition = [[30,20,100,80],[150,20,100,80],[30,110,100,80],[150,110,100,80]];
                        }
                        
                        for(let j=0;j<n;j++){
                            img = images[i][j];
                            
                            html2canvas(img, {
                                dpi: 300, // Set to 300 DPI
                                scale: 3, // Adjusts your resolution
                                onrendered: function(canvas) {
                                    img = canvas.toDataURL("image/jpg", 1);
                                } 
                            });
                            
                            doc.addImage(img,'JPG', dimensionPosition[j][0],dimensionPosition[j][1],dimensionPosition[j][2],dimensionPosition[j][3]); 
                            //Définition des bordures
                            doc.setDrawColor(255, 255, 255);
                            doc.setLineWidth(4);
                            doc.line(dimensionPosition[j][0] - 1,dimensionPosition[j][1],dimensionPosition[j][0] + dimensionPosition[j][2] + 3,dimensionPosition[j][1]);
                            doc.line(dimensionPosition[j][0] + 1,dimensionPosition[j][1],dimensionPosition[j][0] + 1,dimensionPosition[j][3]+ dimensionPosition[j][1]);
                            doc.line(dimensionPosition[j][0] + dimensionPosition[j][2] + 1,dimensionPosition[j][1],dimensionPosition[j][0] + dimensionPosition[j][2] + 1,dimensionPosition[j][3] + dimensionPosition[j][1]);
                            doc.line(dimensionPosition[j][0] - 1,dimensionPosition[j][3] + dimensionPosition[j][1],dimensionPosition[j][0] + dimensionPosition[j][2] + 3,dimensionPosition[j][3] + dimensionPosition[j][1]);

                        }
                
            }
          
            doc.getFont("PlayfairDisplay.ttf", "BADFACE1");

                doc.addFont('RobotoSlab-VariableFont_wght.ttf', 'Roboto', 'cursive');
        
                doc.setFont('PlayfairDisplay');
              doc.setFontSize(titles[i][2]);  
               myText = titles[i][0];

               if((myText.length -1) < 55){
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
                    left = (myText.length -1)/2 * 0.4;
                    left = 11.4 - left;
                    left = 30 + left * 10;
                    doc.text(left, 20 + i*10,  myText);
                }
               }

               
                doc.setFontSize(leftTexts[i][2]);
                myText = leftTexts[i][0];
                left = (myText.length -1)/2 * 0.24;
                left = 3.7 - left;
                left = left * 10;
                doc.text(left,90, leftTexts[i][0]);

                doc.setFontSize(rightTexts[i][2]);
                myText = rightTexts[i][0];
                left = (myText.length -1)/2 * 0.24;
                left = 22.2 + left;
                left = left * 10;
                doc.text(left,90, rightTexts[i][0]);

                doc.setFontSize(bottomTexts[i][2]);
                myText = bottomTexts[i][0];

               if((myText.length -1) < 90){
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
                    left = (myText.length -1)/2 * 0.24;
                    left = 11.4 - left;
                    left = 25 + left * 10;
                  
                    doc.text(left, 150 + i*7,  myText);
                }
               }

            doc.addPage();
        }
        doc.output('datauri');
        doc.save('Yearbook.pdf');
    
    });


})
        

