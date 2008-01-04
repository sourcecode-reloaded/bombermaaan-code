<?php

include_once( "inc/webpage.php" );


$webpage = new WebPage();
$webpage->head();

?>

<h1>Development</h1>

<div id="content">

<h2>General</h2>

<p>
Bombermaaan is written in C++ and hosted on SourceForge.net. Bombermaaan should run on all 32-bit MS Windows operating systems.
</p>

<h2>Links to SourceForge.net</h2>

<ul>
<li><a href="https://sourceforge.net/projects/bombermaaan/">Project page</a></li>
<li><a href="https://sourceforge.net/project/showfiles.php?group_id=81520">Download section</a></li>
<li><a href="http://bombermaaan.svn.sourceforge.net/viewvc/bombermaaan/">Subversion repository</a></li>
</ul>

<h2>Compile Bombermaaan by yourself</h2>

<p>
There is a (incomplete so far) <a href="http://bombermaaan.svn.sourceforge.net/viewvc/*checkout*/bombermaaan/trunk/docs/how-to-compile.txt?revision=152">how-to guide</a> you can use if you want to compile Bombermaaan by yourself.
Unfortunately, the image and sound files are not in the subversion repository yet. You can get them from the source package, though.
This is true for the small sprites (16 pixels per block). You can delete the RES32 project from your VC++ solution to get Bombermaaan compiled.
The RES32 project generates the DLL for the larger sprites (32 pixels per block).
</p>

<h2>Release steps</h2>

<p>
Compile instructions
</p>

<ul>
<li>Update <code>BOMBERMAAAN_WINDOW_TITLE</code> string in CGame.cpp</li>
<li>Set line <code>#define ENABLE_DEBUG_KEYS</code> in CGame.cpp to comment</li>
<li>Select configuration &quot;Release&quot; in the solution</li>
<li>Rebuild the solution</li>
</ul>

<p>
Zip package
</p>

<ul>
<li>Create a new folder <code>Bombermaaan_<i>VERSION</i>.zip</code></li>
<li>Place the files <code>Bombermaaan.exe</code>, <code>Bombermaaan.dll</code> and <code>FMOD.dll</code> in this directory</li>
<li>Copy the directory with level files in the new folder</li>
<li>Zip the folder</li>
</ul>

<p>
Publishing
</p>

<ul>
<li>Upload the zip file to the SourceForge.net FTP server</li>
<li>Add the file in the file release system</li>
</ul>


</div>

<?php

$webpage->tail();

?>