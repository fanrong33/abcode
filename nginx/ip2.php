<?php

function get_rand_ip(){
  $arr_1 = array("218","218","66","66","218","218","60","60","202","204","66","66","66","59","61","60","222","221","66","59","60","60","66","218","218","62","63","64","66","66","122","211");
  $randarr= mt_rand(0,count($arr_1));
  $ip1id = $arr_1[$randarr];
  $ip2id=  round(rand(600000,  2550000)  /  10000);
  $ip3id=  round(rand(600000,  2550000)  /  10000);
  $ip4id=  round(rand(600000,  2550000)  /  10000);
  return  $ip1id . "." . $ip2id . "." . $ip3id . "." . $ip4id;
}

require 'SimpleHttpClient.class.php';
$ip = get_rand_ip();
$response = SimpleHttpClient::get('http://ip2.com/ip/ip_query', array('ip'=>$ip));
var_dump($response);
