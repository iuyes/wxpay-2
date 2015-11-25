<?php

class WxPayFactory
{

    /**
     * @var WxPayConfig
     */
    static $config;

    public static function setDefaultConfig(WxPayConfig $wxPayConfig)
    {
        self::$config = $wxPayConfig;
    }

    public static function getDefaultConfig()
    {
        return self::$config;
    }

    /**
     *
     */
    public static function api()
    {
        return new WxPayApi(self::$config);
    }

    public static function WxPayResults()
    {
        return new WxPayResults(self::$config);
    }

    public static function WxPayReport()
    {
        return new WxPayReport(self::$config);
    }
}