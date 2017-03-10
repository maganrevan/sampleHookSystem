<?php


/**
 * class debug, will show you the current Errors or Warnings, or all
 *
 * @copyright Magnus Kruschwitz
 * @author Magnus Kruschwitz
 * 
 */        
class debug {

    public function __construct($bDebug, $sDebug = 0) {
        if ($bDebug) {
            switch ($sDebug) {
                case "error":
                    define('SHOP_LOG_LEVEL', E_ERROR);
                    define('SYNC_LOG_LEVEL', E_ERROR);
                    define('ADMIN_LOG_LEVEL', E_ERROR);
                    define('SMARTY_LOG_LEVEL', E_ERROR);
                    ini_set('display_errors', 1);
                    break;
                case "warning":
                    define('SHOP_LOG_LEVEL', E_WARNING);
                    define('SYNC_LOG_LEVEL', E_WARNING);
                    define('ADMIN_LOG_LEVEL', E_WARNING);
                    define('SMARTY_LOG_LEVEL', E_WARNING);
                    ini_set('display_errors', 1);
                    break;
                case "notice":
                    define('SHOP_LOG_LEVEL', E_NOTICE);
                    define('SYNC_LOG_LEVEL', E_NOTICE);
                    define('ADMIN_LOG_LEVEL', E_NOTICE);
                    define('SMARTY_LOG_LEVEL', E_NOTICE);
                    ini_set('display_errors', 1);
                    break;
                case "all":
                    define('SHOP_LOG_LEVEL', E_ALL);
                    define('SYNC_LOG_LEVEL', E_ALL);
                    define('ADMIN_LOG_LEVEL', E_ALL);
                    define('SMARTY_LOG_LEVEL', E_ALL);
                    ini_set('display_errors', 1);
                    break;
                default:
                    define('SHOP_LOG_LEVEL', E_ERROR);
                    define('SYNC_LOG_LEVEL', E_ERROR);
                    define('ADMIN_LOG_LEVEL', E_ERROR);
                    define('SMARTY_LOG_LEVEL', E_ERROR);
                    ini_set('display_errors', 1);
                    break;
            }
        } else {
            define('SHOP_LOG_LEVEL', E_ALL);
            define('SYNC_LOG_LEVEL', E_ALL);
            define('ADMIN_LOG_LEVEL', E_ALL);
            define('SMARTY_LOG_LEVEL', E_ALL);
            ini_set('display_errors', 0);
        }
    }

    public function __destruct() {
        
    }

}