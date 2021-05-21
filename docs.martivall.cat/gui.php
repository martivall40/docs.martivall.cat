<?php $pagina = "AHK en GUI"; ?> 
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
        <h2 class="principal">AHK en GUI</h2>
        <p>En aquesta secció farem escripts amb ínterfície gràfica. Comensarem aprenent com fer i disenyar una finestra, afegir diferents components i més endevant a programar botons i donar vida al nostre programa</p>
        <a class="link" href="https://www.autohotkey.com/docs/commands/Gui.htm" target="_blank">Aquí us deixo les instruccions del propi programa.</a><br><br>
        <h2 class="subtitul">El primer script amb finestra</h2>
        <p>Per comensar a fer una finestra, estaria be definir el tipus de font i de lletra que volem emplear en la nosatra finestra perquè quedi bé estèticament. Un cop tenim la font, ja podem procedir a afegir components al nostre gust. Cal tenir en compte que la lletra es posarà amb la última línea de font que hague posat, en cas que volgueu canviar de font en un especific moment, s'haura de posar una lína modificant la lletra i si la resta la volíeu amb la font del començament, haureu de tornar a afegir-la</p>
        <p>Per posar un font normal, escriurem la línea: "Gui, Font, s10, Verdana". Per canviar la lletra heu de canviar el numero de la "s".</p>
        <p>Hi han diferents tipus de components: text, quadre de text, butons,imatges...</p>
        <p>Ara ens interessa posar el component de text. Afegirem la Línea "Gui, Add, Text, x10 y10, Això és un text" Això afageix un component de text a 10 pixels a la dreta i abaix amb el un text.</p>
        <p>Ara falta el codi que es mostri aquesta finestra: "Gui, Show, w300 h300, La meva finestra" Aquests números corresponen a la mida d'aquesta.</p>
        <p>Els fitxers ahk sempre queden corrent en segon pla, per tant encara que tanqueu la finestra el programa seguira obert. Amb la qual cosa haurem d'afegir aquesta comanda al final del script perquè això anterior no passi, ja que això es un error i un problema que a la llarga emprenya una mica.</p>
        <p>Aquest codi resultant queda aixi:<p>
        <div class="codebox"><p>Codi: <a style="color: rgba(0,255,67,1); " href="#" onclick="selectCode(this); return false;">Seleccionar el codi</a></p><pre class="line-numbers-hide language-autohotkey"><code class="language-autohotkey" expanded="false" style="height: 200px; max-height: unset;"><span class="token important"><?php include_once("includes/codiGUI01.php"); ?></span><span aria-hidden="true" class="line-numbers-rows"></span></code></pre></div>
        <h2 class="subtitul">script amb finestra interactiu</h2>
        <p>Ara veurem un script amb finestra més complet.</p>
        <p>En aquest script pots introduir un text i el numero de begades que vols que tel repeteixi. Colocan-te en un editor de text, pitja la tecla corresponent del text i veuras com envia el que has posat el número de cops que has definit.</p>
        <div class="codebox"><p>Codi: <a style="color: rgba(0,255,67,1); " href="#" onclick="selectCode(this); return false;">Seleccionar el codi</a></p><pre class="line-numbers-hide language-autohotkey"><code class="language-autohotkey" expanded="false" style="height: 200px; max-height: unset;"><span class="token important"><?php include_once("includes/codiGUI02.php"); ?></span><span aria-hidden="true" class="line-numbers-rows"></span></code></pre></div>
        <h2 class="subtitul">joc interactiu</h2>
        <p>Si et preguntaves si amb això es poden fer algun tipus de jocs senzills, la resposta és sí. La veritat es què al ser amb el codi font amb c es poden fer jocs amb objectes, i fer jocs realment impresionants fent-los amb un editor de text pla sense motor gràfic. Tot i que es podria fer, ara que estem fent coses senzilles ara no entrerem a fer coses tant avançades. Per tant us ensenyare un joc que podríes fer estant aburrit un dia daquets, per exemple estant amb quarentena.</p>
        <p>consisteix en posar butons, textos i unes quantes variables, la qualitat daixò dependra de lo aburrit que estiguis i les hores que hi posis. Jo com que hem vaig aburrir poc i només vaig fer 4 cosetes.</p>
        <p>Observeu el script que teniu a continuació:</p>
        <div class="codebox"><p>Codi: <a style="color: rgba(0,255,67,1); " href="#" onclick="selectCode(this); return false;">Seleccionar el codi</a></p><pre class="line-numbers-hide language-autohotkey"><code class="language-autohotkey" expanded="false" style="height: 200px; max-height: unset;"><span class="token important"><?php include_once("includes/codiGUI03.php"); ?></span><span aria-hidden="true" class="line-numbers-rows"></span></code></pre></div>
        <p>A partir d'aqui ja tens una idea general de com fer progrmaes amb finestres.</p>
        <h2 class="subtitul">Com fer un login amb ahk</h2>
        <p>També us ensenyare com fer una mena de login per poder entrar al programa.</p>
        <p>Aquí teniu un exemple de login amb contrasenya. Per tancar-lo premer esc.</p>
        <p>Al poder veure la el codi, us repto a investigar i aconseguir entrar.</p>
        <div class="codebox"><p>Codi: <a style="color: rgba(0,255,67,1); " href="#" onclick="selectCode(this); return false;">Seleccionar el codi</a></p><pre class="line-numbers-hide language-autohotkey"><code class="language-autohotkey" expanded="false" style="height: 200px; max-height: unset;"><span class="token important"><?php include_once("includes/codiGUI04.php"); ?></span><span aria-hidden="true" class="line-numbers-rows"></span></code></pre></div>
      </article>
    </section>
    <?php include_once("includes/aside.php"); ?>
    <?php include_once("includes/footer.php"); ?>
  </body>
</html>
