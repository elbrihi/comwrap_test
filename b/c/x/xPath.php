<?php


include($_SERVER['CONTEXT_DOCUMENT_ROOT'].'/a/path/path.php') ; echo '<br />';

$path = new Path('/a/b/c/x');

 $path->cd('../d').'<br />';
 

 echo $path->currentPath;




?>



