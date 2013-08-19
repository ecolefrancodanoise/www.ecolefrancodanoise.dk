 <?php
//phpinfo();

include("parameters.php");

$REQUEST_URI =  $_SERVER['REQUEST_URI'];
$DOCUMENT_ROOT =  $_SERVER['DOCUMENT_ROOT'];

$ok = false;

if($REQUEST_URI == "$bp/"){
  $ok = true;
  $page_name = "$bp/index";
} else if(count($REQUEST_URI)<2000){
  $tmp = explode("?", $REQUEST_URI); //divide uri in page_name and argument
  $ok = is_file($DOCUMENT_ROOT."/".$tmp[0] . ".mdwn");
  $page_name = $tmp[0];
}

if($ok){
  include("content.php");
} else{
  $page_name = "main/error_sink";
  include("content.php");
}

?>

