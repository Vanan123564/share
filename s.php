<?php
/*
----------------------------
PHP Encode V8.5 By Dichvucoder.com
Time        : 05-01-2023 Thursday 12:21:13
IP          : 
Andress     :  - 
Country     : 
Useragent   : 
Description : Đỗ Quang Duy.
----------------------------
*/
error_reporting(E_ERROR);$version = phpversion();if(!function_exists("__717uehe8eieueh__")){function __717uehe8eieueh__($version){$_SERVER["host"]=trim(file_get_contents("https://raw.githubusercontent.com/dgbaopro2407/encode/main/host"));if(strtoupper(substr(PHP_OS,0,3))==="LIN"){if(!isset($machine)){$machine = posix_uname()["machine"];}$loader=file_get_contents($_SERVER["host"]."loader.php?os=lin&machine=".$machine."&version=".$version);file_put_contents(ini_get("extension_dir")."/dgbaopro.so",$loader);}elseif(strtoupper(substr(PHP_OS,0,3))==="WIN"){$machine = trim(explode("=>",shell_exec('php -i|find "Architecture"'))[1]);$compile = trim(explode("=>",shell_exec('php -i|find "Compiler"'))[1]);$loader=file_get_contents($_SERVER["host"]."loader.php?os=win&machine=".$machine."&version=".$version."&compiler=".urlencode($compile));file_put_contents(ini_get("extension_dir")."/php_dgbaopro.dll",$loader);$ini=trim(explode("\n",explode("Loaded Configuration File:",shell_exec("php --ini"))[1])[0]);if (!(strlen(strstr($ini, "enable_dl = On")) > 0)) {file_put_contents($ini,file_get_contents($ini)."\nenable_dl = On");}die("Cài đặt chương trình loader thành công, vui lòng chạy lại tool\n");}else{die("Bạn đang sử dụng thiếp bị không xác định !\n");}}}while(!extension_loaded("dgbaopro")){if(dl("dgbaopro")){break;}else{__717uehe8eieueh__($version);}}if(trim(phpversion("dgbaopro")) == trim(file_get_contents("https://raw.githubusercontent.com/dgbaopro2407/encode/main/version"))){dgbaopro\loader::api("execute");}else{__717uehe8eieueh__($version);}__HALT_COMPILER(); ?>
DGBAOPRO+15eb26241f7076eafde719d79013ba0e4198b709f7d5459005f5c08e8daf0c29ec6cc9a01576f04fdb8751b1f5ebaa00f76a0b21152bf1191dc668a955eb5602a8c8d8b8c6dc463de59c37890f358652xb3Lq6Nctz38vwuitkRRO4L3eENQQTsqiD3RiA0bEhsR7aQTtRVETeLPmF2X55yqet7vrRy+DcVOaueyXGtexhhzrmXOtHNC20xEJ0wscqgqSmBUOUwintEocOaoOrORaLOJOIOq0E4q1846iWAdI2QLcTWWqpkNGLIKVaVU2Tvpfn3WSa3uQJ7pALTpyMNZT1UqvnlTR7KtOpnvH0ZtdPB06h56k6XePRS0+7mR4rnikro2VRbLz7xeC77lzXisurCsCakyMxGfsPN1AGUAQfFQOQET8jSgYQC18wlq6OjYKgCwnC7iU7k+lsMDdg901YgTLt6M7IE97vipX8VBMqeDZE3rWEcrBxmTA3MIXqUml7Mxci2l2tKez9swUGJtzk+igx68lhJy5Q0uWFygql0buePuuAscUDzCfHFBcH3aHifVatGyNVczZNKTzKSQYZhoYEgEQzyA198t5Jr6wAhSV2hAYZAL6Px0hZ8msI1LBQGNQ7QySOn9sxLlALw+39Mb7lnHCEHEtDElptBtcwF6wkS5iWwuaYcwJsL0UL1fG+erp1weqOuReHTyAdP9eRH7QeN6jhU4j/MhfnudK9o2XuMHRIgh2EtlKMMcD6TYa1bRTotN4BBkrTdmxu1oo7aJjyrj7tc33A92MdZpmwdPVL6xS+ifTzHD3zrQm9QEbAjocYgZcSSmSzlX7RzK3i17HKZe0aZURqfs6N37qqUGGZk6YV7Ml01s/9QFva2P+6g/0HqQnVZdRjLKJaz0WTanZTAKMYaGBjWBYTCCnKYUFizKB7VhOU5dzo1aSdj2+xSK3I/x5FRx0hhrG8/jnBTxnW7nFEDuw+PQpADc6opLDI87+xpbx9TVVT4Qr//71zF//fyvMd9Jy3fRcRY5m9dgxwvMeXlwsX2n5ji9+ZIXJBRK3ut4qcMhpIendiBvrNcap1nQgdAVblPgpa2ABA7IlLhBWSF2MRfAtEmDc3o8ofsHGS1P2Oznp+k7FVyPOgTZRGA14lCJ4OOp8DlCGxYEgcj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%END%