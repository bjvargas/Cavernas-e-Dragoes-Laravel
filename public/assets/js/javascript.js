(function(win,doc){
    'use strict';

    //delete personagens
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

   //delete magias
   function confirmDelM(event)
   {
       event.preventDefault()
       let token=doc.getElementsByName("_token")[0].value;
       if(confirm("Ficou sem mana?")){
               let ajax =new XMLHttpRequest();
               ajax.open('DELETE',event.target.parentNode.href);
               ajax.setRequestHeader('X-CSRF-TOKEN',token);
               ajax.onreadystatechange=function(){
                   if(ajax.readyState === 4 && ajax.status === 200){
                   win.location.href="magias";
                   }
               };
               ajax.send();
       }else{
           return false;
       }

   }
   if(doc.querySelector('.js-deu')){
       let btn=doc.querySelectorAll('.js-deu');
       for(let i =0; i<btn.length; i++){
           btn[i].addEventListener('click',confirmDelM,false);
       }
   }


})(window,document);

(function(win,doc){
    'use strict';

   //delete magias
   function confirmDelMP(event)
   {
       event.preventDefault()
       let token=doc.getElementsByName("_token")[0].value;
       if(confirm("Perdestes o grimório?")){
               let ajax =new XMLHttpRequest();
               ajax.open('DELETE',event.target.parentNode.href);
               ajax.setRequestHeader('X-CSRF-TOKEN',token);
               ajax.onreadystatechange=function(){
                   if(ajax.readyState === 4 && ajax.status === 200){
                    window.location.reload();
                   }
               };
               ajax.send();
       }else{
           return false;
       }

   }
   if(doc.querySelector('.js-delMP')){
       let btn=doc.querySelectorAll('.js-delMP');
       for(let i =0; i<btn.length; i++){
           btn[i].addEventListener('click',confirmDelMP,false);
       }
   }


})(window,document);






    