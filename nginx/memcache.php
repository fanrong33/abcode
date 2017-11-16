<?php
// memcache.php?onlyget=1
$mem = new Memcache;
$mem->connect("127.0.0.1", 11211);
if($_GET['onlyget']){
}else{
    $mem->set("key", 'This is a test!', 0, 3600);
}
$val = $mem->get('key');
echo $val;
