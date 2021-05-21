<?php $pagina = "Informació"; ?> 
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
        <h2 class="principal">Informació de autohotkey</h2>
        <h2 class="subtitul">Què és?</h2>
        <p>AutoHotkey és un llenguatge de programació tipus script lliure i de codi obert que en principi es va dissenyar per a la creació de macros i automatització, però que actualment té tot el necessari per a programar, com qualsevol llenguatge de programació. Permet als usuaris automatitzar tasques repetitives en Microsoft Windows.</p>
        <p>Utilitza un llenguatge de script personalitzat que està específicament orientat a proporcionar dreceres de teclat o tecles d'accés ràpid.</p>
        <h2 class="subtitul">Quines utilitats té?</h2>
        <p>Els scripts de AutoHotkey es poden utilitzar per iniciar programes, obrir documents, enviar pulsacions de tecles o clics i moviments del ratolí. Els scripts també poden assignar, recuperar i manipular variables, fer bucles i manipular finestres, arxius i carpetes. Les ordres poden ser activades mitjançant una combinació de tecles. També pots modificar el resultat al prémer una tecla o enviar instruccions en una finestra en concret sense alterar el funcionament de la resta de maquina.</p>
        <p>També poden realitzar tasques més complexes amb els formularis d'entrada de dades personalitzades (finestres GUI), treballant amb el registre de sistema, o usant la API de Windows mitjançant crides a funcions de DLL.</p>
        <p>Els scripts es poden compilar en un arxiu executable que es pot executar en altres ordinadors que no tinguin instal·lat AutoHotkey. El codi font està escrit en C ++ i es pot compilar amb Visual Studio Express.</p>
        <a class="link" href="https://www.autohotkey.com/download/ahk-install.exe" target="_blank">Descarregar l'instal·lador del Autohotkey</a><br><br>
        <a class="link" href="https://www.autohotkey.com/" target="_blank">Pagina del Autohotkey</a>
      </article>
    </section>
    <?php include_once("includes/aside.php"); ?>
    <?php include_once("includes/footer.php"); ?>
  </body>
</html>
