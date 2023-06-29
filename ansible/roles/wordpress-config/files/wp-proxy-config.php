<?php
/** Settings for WP behind Reverse-Proxy. */

if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'){
    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 443;
}
if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
if (isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_HOST'];
}

