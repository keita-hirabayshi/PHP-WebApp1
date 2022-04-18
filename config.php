<?php
$url = $_SERVER['REQUEST_URI'];


if(preg_match("/(.+start|end))/i",$url,$match)){
    define('BASE_CONTEXT_PATH',$match['0'].'/');
}
// start or end フォルダまでのパスを取ってくるように設定している。