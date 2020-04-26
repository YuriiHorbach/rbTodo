<?php


//if(!session_status()){
//    session_start();
//}
//
//require __DIR__.'/components/QueryBuilder.php';
//require __DIR__.'/database/Auth.php';
//
//
//$db = new QueryBuilder($db);
//
//
//
//
//$auth = new Auth($db);
//$auth->register('rrffffrm@tra.v111111gfgg111111o', '22222');
//
//$auth->login('rrffffrm@tra.v111111gfgg111111o', '22222');
//
//$url = $_SERVER['REQUEST_URI'];
//
//if($url == '/list'){
//    require  "../index.php"; exit;
//} elseif ($url == '/contact'){
//    require  "/contact.php"; exit;
//}
//
//echo "404 | ERROR";
//var_dump($_SERVER);
$url = $_SERVER['REQUEST_URI'];
exit;
if($url == 'about'){
   echo "about"; exit;
} elseif ($url == 'contact'){
   echo "contact"; exit;
}

echo "404 | ERROR";