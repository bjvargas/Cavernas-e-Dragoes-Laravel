<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bem vindo aventureiro!</title>
        <link rel="stylesheet" type="text/css" href="{{ url('/css/index.css') }}" />
    </head>

    <body>
       <nav class="links">
           <label for="rd_home"><img src="/imagens/home.png"></label>
           <label for="rd_racas"><img src="/imagens/racas.png"></label>
           <label for="rd_classes"><img src="/imagens/classes.png"></label>
           <label for="rd_antecedentes"><img src="/imagens/antecedentes.png"></label>
           <label for="rd_magias"><img src="/imagens/magias.png"></label>
           <label for="rd_equipamentos"><img src="/imagens/equipamentos.png"></label> 
           <label for="rd_login"><img src="/imagens/login.png"></label>          
       </nav>

       <div class="scroll"> 
           <input type="radio" name="grupo" id="rd_home" checked="true">
           <input type="radio" name="grupo" id="rd_racas">
           <input type="radio" name="grupo" id="rd_classes">
           <input type="radio" name="grupo" id="rd_antecedentes">
           <input type="radio" name="grupo" id="rd_magias">
           <input type="radio" name="grupo" id="rd_equipamentos">
           <input type="radio" name="grupo" id="rd_login">
        
           <section class="sections">

                <section class="bloco" id="home">
                    <p>
                    Precisando de um lugar para criar e armazenar seus personagens em D&D 5e?
                    Crie seus personagens consultando informações como raças, classes, magias, talentos e antecedentes.
                    Poderá evoluir, adicionar equipamentos, magias e muito mais.
                    Seja muito bem vindo aventureiro!
                    </p>
                </section>
                <section class="bloco" id="racas">
                    <p>
                    Aqui informações sobre raças. djsnifdnidfnf
                    jdnijnsoijcnoijncoisjnoidjnosijnfoisjnocijnsoi
                    ocnisjnocijdnoijsndcojndocidjsnoicjdn
                    kjsndckjnskjcn sjdcn skjcn sdjcnosijcni
                    </p>
                </section>
                <section class="bloco" id="classes"></section>
                <section class="bloco" id="antecedentes"></section>
                <section class="bloco" id="magias"></section>
                <section class="bloco" id="equipamentos"></section>
                <section class="bloco" id="login"></section>

           </section>
       </div>
    </body>
</html>