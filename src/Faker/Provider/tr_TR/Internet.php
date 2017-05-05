<?php

namespace Biberltd\Faker\Provider\tr_TR;

class Internet extends \Biberltd\Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com', 'yahoo.com', 'yandex.com.tr', 'mynet.com', 'turk.net', 'superposta.com');
    protected static $tld = array('com', 'com', 'com', 'com', 'com.tr', 'com.tr', 'info', 'net', 'org', 'org.tr','edu', 'edu.tr', 'edu.tr');

    public function emails($count = 2)
    {
        $result = array();
        for ($i=0; $i<$count; $i++) {
            $result[] = static::email();
        }

        return $result;
    }
}
