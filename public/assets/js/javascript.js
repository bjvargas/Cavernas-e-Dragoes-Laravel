(function(win,doc){
    'use strict';

    //delete
    function confirmDel(event)
    {
        event.preventDefault()
        let token=doc.getElementsByName("_token")[0].value;
        if(confirm("Eu não fui um bom Personagem? T_T, ou você me matou?")){
                let ajax =new XMLHttpRequest();
                ajax.open('DELETE',event.target.parentNode.href);
                ajax.setRequestHeader('X-CSRF-TOKEN',token);
                ajax.onreadystatechange=function(){
                    if(ajax.readyState === 4 && ajax.status === 200){
                    win.location.href="personagens";
                    }
                };
                ajax.send();
        }else{
            return false;
        }

    }
    if(doc.querySelector('.js-del')){
        let btn=doc.querySelectorAll('.js-del');
        for(let i =0; i<btn.length; i++){
            btn[i].addEventListener('click',confirmDel,false);
        }
    }

})(window,document);

(function(win,doc){
    'use strict';

 //deleta equipamento
 function confirmDelE(event)
 {
     event.preventDefault()
     let token=doc.getElementsByName("_token")[0].value;
     if(confirm("Quebrou o que não devia?")){
             let ajax =new XMLHttpRequest();
             ajax.open('DELETE',event.target.parentNode.href);
             ajax.setRequestHeader('X-CSRF-TOKEN',token);
             ajax.onreadystatechange=function(){
                 if(ajax.readyState === 4 && ajax.status === 200){
                 win.location.reload();
                 }
             };
             ajax.send();
     }else{
         return false;
     }

 }
 if(doc.querySelector('.js-delEquip')){
     let btn=doc.querySelectorAll('.js-delEquip');
     for(let i =0; i<btn.length; i++){
         btn[i].addEventListener('click',confirmDelE,false);
     }
 }

})(window,document);