<?php

class WxPayFactory
{

    /**
     * @var WxPayConfig
     */
    private static $config;

    /**
     * @param WxPayConfig $wxPayConfig
     */
    public static function setConfig(WxPayConfig $wxPayConfig)
    {
        self::$config = $wxPayConfig;
    }

    /**
     * @return WxPayConfig
     */
    public static function getConfig()
    {
        return self::$config;
    }

    /**
     * @return WxPayApi
     */
    public static function WxPayApi()
    {
        return new WxPayApi(self::$config);
    }

}