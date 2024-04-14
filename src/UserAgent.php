<?php

/**
 * Coded by Farhan Ali
 * i.farhanali.dev@gmail.com
 * UserAgent class provides methods to generate random User-Agent strings for different platforms.
 */
class UserAgent{
    /**
     * Generates a random User-Agent string for Windows platform.
     *
     * @return string Random User-Agent string for Windows.
     */
    public static function getWindows(){
        $platforms = ["6.1", "6.2", "6.3", "10.0; Win64; x64"];
        $platform = $platforms[array_rand($platforms)];
        
        return sprintf("Mozilla/5.0 (Windows NT %s) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/%s Safari/537.36", $platform, self::getChromeVersion());
    }
    
    /**
     * Generates a random User-Agent string for Linux platform.
     *
     * @return string Random User-Agent string for Linux.
     */
    public static function getLinux(){
        return sprintf("Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/%s Safari/537.36", self::getChromeVersion());
    }
    
    /**
     * Generates a random User-Agent string for mobile devices.
     *
     * @return string Random User-Agent string for mobile devices.
     */
    public static function getMobile(){
        $i = mt_rand(0, 3);
        
        switch($i){
            case 0:
                return sprintf("Mozilla/5.0 (Linux; Android 14; LM-%s%d) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/%s Mobile Safari/537.36", chr(mt_rand(65, 90)), mt_rand(111, 999), self::getChromeVersion());
            case 1:
                return sprintf("Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S%d/%d%s%s%s%s%d; U; Bada/1.2; en-us) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/%d%d Mobile WVGA SMM-MMS/1.2.0 OPN-B", mt_rand(100, 9999), mt_rand(100, 9999), chr(mt_rand(65, 90)), chr(mt_rand(65, 90)), chr(mt_rand(65, 90)), chr(mt_rand(65, 90)), mt_rand(1, 9), mt_rand(1, 9), mt_rand(1, 9));
            case 2:
                return sprintf("Mozilla/5.0 (iPhone, CPU iPhone %d_%d_%d like Mac OS %d) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/%d%s%d) Safari/604.1", mt_rand(4, 16), mt_rand(1, 9), mt_rand(1, 9), mt_rand(8, 16), mt_rand(9, 19), chr(mt_rand(65, 90)), mt_rand(50, 199));
            case 3:
                return sprintf("Mozilla/5.0 (iPhone %d X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/%d.1.1 Mobile/iPhone%d,%d Safari/604.1", mt_rand(4, 6), mt_rand(4, 13), mt_rand(4, 16), mt_rand(1, 9));
        }
    }
    
    /**
     * Generates a random User-Agent string for a random platform (Windows, Linux, or mobile).
     *
     * @return string Random User-Agent string.
     */
    public static function getRandom(){
        $i = mt_rand(0, 2);
        switch($i) {
            case 0:
                return self::getWindows();
            case 1:
                return self::getLinux();
            case 2:
                return self::getMobile();
        }
    }
    
    /**
     * Retrieves a random Chrome version.
     *
     * @return string Random Chrome version.
     */
    private static function getChromeVersion(){
        $versions = ["123.0.6312.122", "123.0.6312.107", "123.0.6312.106", "123.0.6312.88", "123.0.6312.105", "123.0.6312.86", "123.0.6312.60", "123.0.6312.59", "123.0.6312.58", "122.0.6261.131", "122.0.6261.129", "123.0.6312.46", "122.0.6261.130", "122.0.6261.128", "122.0.6261.113", "122.0.6261.112", "122.0.6261.96", "122.0.6261.111", "122.0.6261.95", "122.0.6261.94", "122.0.6261.71", "122.0.6261.70", "122.0.6261.69", "121.0.6167.189", "122.0.6261.57", "121.0.6167.187", "121.0.6167.185", "122.0.6261.39", "121.0.6167.186", "121.0.6167.184", "121.0.6167.162", "121.0.6167.161", "121.0.6167.160", "121.0.6167.141", "121.0.6167.140", "121.0.6167.87", "121.0.6167.139", "121.0.6167.86", "121.0.6167.85", "120.0.6099.227", "120.0.6099.225", "121.0.6167.75", "120.0.6099.226", "120.0.6099.224", "120.0.6099.218", "120.0.6099.217", "120.0.6099.216", "120.0.6099.201", "120.0.6099.200", "120.0.6099.199"];
        return $versions[array_rand($versions)];
    }
}
