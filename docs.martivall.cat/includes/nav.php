<nav class="principal separacio" id="menu">
  <ul>
    <li>
      <a class="<?php if ($pagina=="introducció") {echo "active"; } else  {echo "noactive";}?>" href="index.php">Introducció</a>
    </li>
    <li>
       <a class="<?php if ($pagina=="Informació") {echo "active"; } else  {echo "noactive";}?>" href="informacio.php">Informació de autohotkey</a>
    </li>
    <li>
      <a class="<?php if ($pagina=="AHK Studio") {echo "active"; } else  {echo "noactive";}?>" href="studio.php">ahk studio</a>
    </li>
    <li>
      <a class="<?php if ($pagina=="Tutorials") {echo "active"; } else  {echo "noactive";}?>" href="tutorials.php">Tutorials per principiants</a>
    </li>
    <li>
      <a class="<?php if ($pagina=="AHK en GUI") {echo "active"; } else  {echo "noactive";}?>" href="gui.php">AHK en GUI</a>
    </li>
    <li>
      <a class="<?php if ($pagina=="scripts") {echo "active"; } else  {echo "noactive";}?>" href="scripts.php">scripts</a>
    </li>
    <li style="float: right;">
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
       <i class="fa fa-bars"></i>
      </a>
    </li>
  </ul>
</nav>


