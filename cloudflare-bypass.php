<?php
if (strtolower(substr(PHP_OS, 0, 3)) == "win"){shell_exec('cls');}else{shell_exec('clear');}

if(isset($_SERVER['argv'][1]) || isset($_GET['site']) ) {
$site = $_SERVER['argv'][1] or $_GET['site'] ;
echo "\n Site:		".$site."\n";
}else{die("\n Pleas Insert a Site.\n EX: php cloudflare-bypass.php site.com\n\n");}
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}

$check = @file_get_contents('db.txt');
//echo $check;
echo " PLeas wait:..\n";
if (stripos($check, $site.' ') !== false){

$server = entre2v2($check,"$site","\n");


echo " Server:	".$server."\n\n";

}else{echo " sorry can't find it\n\n";}
?>