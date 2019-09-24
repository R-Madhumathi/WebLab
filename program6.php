<?php

$fp=fopen("counterLog.txt", "r");
$count=fread($fp, 10);
fclose($fp);

$count=$count+1;

echo "<h2><center>PAGE VIEWS:".$count."</center></h2>";

$fp=fopen("counterLog.txt", "w");
fwrite($fp,$count);
fclose($fp);

?>