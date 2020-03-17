    var dataStyle;
    var textArea;
    var font;
    var selectedOption;
    var text = document.getElementsByClassName('text');
    var menu = document.getElementById('text-menu');
    var select = document.getElementById('font-select');
    var layout = document.getElementsByClassName('layout');
    var f = ["open","lemonada","montserrat","lato"];
    var t = ["title","right-text","left-text","middle-text","bottom-text"];

    function font_change(e){
        textArea = e.target;
        dataStyle = textArea.getAttribute('data-style');
        font = textArea.getAttribute('class');
        //font = font.replace("text ", "");

        //$('#font-select option[value="' + font + '"]').prop('selected', true);

        menu.classList.toggle(dataStyle);
        menu.classList.remove('hidden');

        for(let i = 0;i < 5;i++){
            if(dataStyle != t[i]){
                menu.classList.remove(t[i]);
            }
        }
        //Ne marche pas
        if( menu.classList.contains('')){
            menu.classList.add('hidden');
            console.log("zef");
        }
        
        select.addEventListener('change', function(){

            choice = select.selectedIndex  // Récupération de l'index du <option> choisi
            selectedOption = select.options[choice].value;

            textArea.classList.add('class', selectedOption);   
            
            for(let i = 0;i < 4;i++){
                if(selectedOption != f[i]){
                    textArea.classList.remove(f[i]);
                }     
            }       
        });
    }    
        
    for (var i = 0; i < layout.length; i++) {
        layout[i].addEventListener('click', font_change);
    }

