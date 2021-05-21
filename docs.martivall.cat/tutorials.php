<?php $pagina = "Tutorials"; ?> 
<!doctype html>
<html>
  <?php include_once("includes/head.php"); ?>
  <body class="principal container">
    <script type="text/javascript" src="core/js/script.js"></script>
    <canvas id="c"></canvas>
    <?php include_once("includes/canvas.php"); ?>
    <?php include_once("includes/header.php"); ?>
    <?php include_once("includes/nav.php"); ?>
    <section class="principal separacio">
    <article>
    <h2 class="principal">Tutorials per principiants</h2>
        <p>Si mai has fet cap script amb Autohotkey i vols apendre a fer-ne, et recomanu que segueixis aquest tutorial.</p>
        <p>Aquí teniu el tutorial i les instruccions d'aquest programa, També teniu el lleguatge de programació i la syntaxi d'aquest llenguatge:</p>
        <a class="link" href="https://www.autohotkey.com/docs/Tutorial.htm" target="_blank">Guia del Autohotkey</a>
        <p>Per comensar ha fer un script, pimer has de crear un arxiu amb extenció .ahk, i per editar el codi del interior l'hauràs d'obrir amb l'editor de notes o unaltra editor de text pla.</p>
        <img style="width: 70%; margin-left: auto; margin-right: auto; display: block; padding-top: 20px;" src="core/imatges/obrirAmb.png"/>
        <p>Un cop ja tinguis el fitxer amb extenció .ahk i el editor de text pla obert, ja pots comensar a fer el codi del programa.</p>
        <p>El primer script que farem, al accecutar-lo, haurem de fer una combinació de tecles i tot seguit ens apareixerà un missage que digui Hola Món.</p>
        <p>Si es vol prèmer una combinació de tecles per executar-lo haurem de posar les tecles que volguem presionar i tot seguit afegirem "::" a continuació.</p>
        <p>Com que una de les tecles que es fa servir menys es la tecla alt, jo recumanu que al comensar un sricp es premi la tecla alt més la que es vulgui. Aquesta tecla es fa amb els simbol !. Laltra tecla que posarem sera la per exeple la lletra a. Per tant la primera línea del nostre codi serà !a::</p>
        <p>La segona línea haurem de cridar la funció del missatge que és "MsgBox" seguit d'una coma i el text que volguem introduïr, en aquest cas "Hola Món!.</p>
        <P>Per posar una línea amb comentari s'ha d'afegir punt i coma i automaticament la part de la dreta ja no serà llegida.</P>
        <p>I ja tenim el script acavat. És un script molt senzill de nomes 2 líneas, les podreu veure a continuació com queden:</p>
        <div class="codebox"><p>Codi: <a style="color: rgba(0,255,67,1); " href="#" onclick="selectCode(this); return false;">Seleccionar el codi</a></p><pre class="line-numbers-hide language-autohotkey"><code class="language-autohotkey" expanded="false" style="height: 200px; max-height: unset;"><span class="token important">!a::  ; el ! es el simbol del control. En aquesta línea, un cop es prem control i la tecla a passa a la línia següent. <br>msgbox, Hola Món!  ; msbox es la funcio dels missatges i despres de la coma va el text que volem mostrar en aquest.</span><span aria-hidden="true" class="line-numbers-rows"></span></code></pre></div>
        <p>Ara apendrem a obrir el bloc de notes i ha simular tecles premudes de diferents maneres</p>
        <p>Ens situarem al anterior script i per comesar crearem les variables amb doferents textos. Un cop tenim les varaiables, les hem de enviar. Hi han diferents maneres de simular les tecles del teclat. El mes senzill es el "send" seguit del que volguem posar, en cas de voler enviar tecles del teclat, podem fer "send {key (state)}", on posa key haurem de posar la tecla i on posa state podem posar down o up, això es útil en cas que vulguem tenir la tecla apretada o deixar-la anar. En aquestcas per afegir una nova línea al bloc de notes, posarem "send {enter}".</p>
        <p>Una manera per enviar tecles en un procés específic, és "ControlSend, , %nom_var%, ahk_pid %ID%. En aquest cas necesitarem que, al obrir el programa en qüestió, que s'enrrecordi de la id del procés.</p>
        <div class="codebox"><p>Codi: <a style="color: rgba(0,255,67,1); " href="#" onclick="selectCode(this); return false;">Seleccionar el codi</a></p><pre class="line-numbers-hide language-autohotkey"><code class="language-autohotkey" expanded="false" style="height: 200px; max-height: unset;"><span class="token important"><?php include_once("includes/codiTutorial2.php"); ?></span><span aria-hidden="true" class="line-numbers-rows"></span></code></pre></div>
      </article>
    </section>
    <?php include_once("includes/aside.php"); ?>
    <?php include_once("includes/footer.php"); ?>
  </body>
</html>
