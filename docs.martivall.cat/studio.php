<?php $pagina = "AHK Studio"; ?> 
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
        <h2 class="principal">AHK Studio</h2>
        <p>En cas de necesitar un editor especial per editar el codi del autohotkey, podeu fer servir el editor especial fet per la comunitat amb el mateix lleguantge que Autohotkey.</p>
        <p>Per utilitzar-lo nomes cal fer un fitxer amb la extenció .ahk, editar-lo amb el bloc de notes i afegir el codi que trobareu a continució. Guardar el document i tancar el bloc de notes. Al fer doble click sobre el fitxer .ahk acavat d'editar,  s'obrirà automaticament l'editor.</p>
        <p>Podeu observar que amb aquest mateix codi i amb Autohotkey podeu fer programes de Windows. Aquest mateix editor, és molt interessant perquè està fet amb el seu propi llenguatge; està fet amb el lleguatge de programació que està pensat per editar.</p>
        <div class="codebox"><p>Codi: <a style="color: rgba(0,255,67,1); " href="#" onclick="selectCode(this); return false;">Seleccionar el codi</a></p><pre class="line-numbers-hide language-autohotkey"><code class="language-autohotkey" expanded="false" style="height: 200px; max-height: unset;"><span class="token important"><?php include_once("includes/codiAHKStudio.php"); ?></span><span aria-hidden="true" class="line-numbers-rows"></span></code></pre></div>
        <a class="link" href="https://www.autohotkey.com/boards/viewtopic.php?t=300" target="_blank">Forum del AHK Studio</a>
      </article>
    </section>
    <?php include_once("includes/aside.php"); ?>
    <?php include_once("includes/footer.php"); ?>
  </body>
</html>
