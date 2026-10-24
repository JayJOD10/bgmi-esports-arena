<?php
// Apply no-store headers site-wide so browser Back/Forward cannot display stale
// authenticated pages after a user or admin logs out. Authentication is still
// enforced server-side by each protected page/guard.
if (!headers_sent()) {
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Pragma: no-cache');
    header('Expires: Thu, 01 Jan 1970 00:00:00 GMT');
}
if(session_status()!==PHP_SESSION_ACTIVE)session_start();
date_default_timezone_set('Asia/Kolkata');
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
function go($url){header('Location: '.$url);exit;}
function token(){if(empty($_SESSION['csrf']))$_SESSION['csrf']=bin2hex(random_bytes(32));return $_SESSION['csrf'];}
function check_token(){if(!hash_equals($_SESSION['csrf']??'',$_POST['csrf']??'')){http_response_code(419);exit('Session expired. Go back and try again.');}}
function flash($type,$msg){$_SESSION['flash']=['type'=>$type,'msg'=>$msg];}
function admin(){return isset($_SESSION['admin_id']);}
