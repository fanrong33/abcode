<?php
    require 'vendor/autoload.php';

    $user_agent =  'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Mobile Safari/537.36';
    $result = new WhichBrowser\Parser($user_agent);

    // $which_browser = get_which_browser($user_agent);
    $device_type     = $result->device->type;
    echo $device_type;
