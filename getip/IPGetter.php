<?php

namespace IPGetter;

class IPGetter
{
    /**
     * get IP address of the user
     *
     * @return void
     */
    public static function getIPAddress()
    {
        // return $_SERVER['REMOTE_ADDR'];
        echo "Hello World";
    }
}

$ip_address = IPGetter::getIPAddress();
echo($ip_address);exit;