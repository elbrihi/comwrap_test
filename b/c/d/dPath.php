<?php


include($_SERVER['CONTEXT_DOCUMENT_ROOT'].'/a/path/path.php') ; echo '<br />';

$path = new Path('/a/b/c/d');

 $path->cd('../x').'<br />';
 

 echo $path->currentPath;

?>