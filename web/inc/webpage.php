<?php

class WebPage {

	function head() {
	
		?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta name="Title" content="Bombermaaan game project" />
<meta name="Author" content="Fury" />
<meta name="Revisit" content="After 15 days" />
<meta name="Keywords" content="bomberman bomber man bombermaaan maaan fury game windows download arena bomb explosion item wall victory player players play" />
<meta name="Description" content="Bombermaaan game project. A DirectX Bomberman game for Windows 95 and later. Original and classic game play. Up to 5 players on the same computer..." />
<meta name="Abstract" content="Bombermaaan game project. A DirectX Bomberman game for Windows 95 and later. Original and classic game play. Up to 5 players on the same computer..." />
<meta name="Robots" content="INDEX,FOLLOW" />
<meta name="Language" content="English" />
<link rel="icon" href="/favicon.ico" type="image/ico" />
<link rel="shortcut icon" href="/favicon.ico" type="image/ico" />
<link rel="stylesheet" href="standard.css" type="text/css"/>
<title>Bombermaaan game project</title>
</head>

<body>
		<?php
		
		$this->menu();

	}
	
	function tail() {
	
		?>
<div id="tail">
<a href="http://sourceforge.net"><img style="border: 0px;" src="http://sflogo.sourceforge.net/sflogo.php?group_id=81520&amp;type=4" width="125" height="37" alt="SourceForge.net Logo" /></a>
<a href="http://validator.w3.org/check?uri=referer"><img style="border: 0px;" src="http://www.w3.org/Icons/valid-xhtml11-blue" alt="Valid XHTML 1.1" height="31" width="88" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
  <img style="border:0;width:88px;height:31px"
       src="http://jigsaw.w3.org/css-validator/images/vcss" 
       alt="Valid CSS!" />
 </a>
</div>

</body>

</html>
        <?php
	
	}
	
	function menu() {

		?>
<div id="menu">

<div>
<a href="/">Home</a>
</div>

<div>
<a href="download.php">Download</a>
</div>

<div>
<a href="license.php">License</a>
</div>

<div>
<a href="screenshots.php">Screenshots</a>
</div>

<div>
<a href="todo.php">To-Do</a>
</div>

</div>
		<?php

	}
	
}

?>