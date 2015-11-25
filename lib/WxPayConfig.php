<?php

/**
 * 配置账号信息
 */
class WxPayConfig
{

    /**
     * 绑定支付的APPID（必须配置，开户邮件中可查看）
     * @var string
     */
    private $app_id;
    /**
     * 商户号（必须配置，开户邮件中可查看）
     * @var string
     */
    private $mch_id;
    /**
     * 商户支付密钥，参考开户邮件设置（必须配置，登录商户平台自行设置）
     * 设置地址：https://pay.weixin.qq.com/index.php/account/api_cert
     * @var string
     */
    private $key;
    /**
     * 公众帐号secert（仅JSAPI支付的时候需要配置， 登录公众平台，进入开发者中心可设置）
     * 获取地址：https://mp.weixin.qq.com/advanced/advanced?action=dev&t=advanced/dev&token=2005451881&lang=zh_CN
     * @var string
     */
    private $appsecret;
    /**
     * 证书路径,注意应该填写绝对路径（仅退款、撤销订单时需要，可登录商户平台下载）
     * API证书下载地址：https://pay.weixin.qq.com/index.php/account/api_cert，下载之前需要安装商户操作证书）
     * @var string
     */
    private $sslcert_path;
    /**
     * @var string
     */
    private $sslkey_path;
    /**
     * curl代理ip（默认0.0.0.0不启用代理）
     * @var string
     */
    private $curl_proxy_host = "0.0.0.0";
    /**
     * curl代理端口（默认0不启用代理）
     * @var int
     */
    private $curl_proxy_port = 0;
    /**
     * 接口调用上报等级，默认紧错误上报（注意：上报超时间为【1s】，上报无论成败【永不抛出异常】，
     * 不会影响接口调用流程），开启上报之后，方便微信监控请求调用的质量，建议至少
     * 开启错误上报。
     * 上报等级，0.关闭上报; 1.仅错误出错上报; 2.全量上报
     * @var int
     */
    private $report_levenl;

    /**
     * 回调url
     * @var string
     */
    private $notify_url;

    /**
     * WxPayConfig constructor.
     * @param string $app_id
     * @param string $mch_id
     * @param string $key
     * @param string $appsecret
     * @param string $sslcert_path
     * @param string $sslkey_path
     * @param string $curl_proxy_host
     * @param int $curl_proxy_port
     * @param int $report_levenl
     * @param string $notify_url
     */
    public function __construct(
        $app_id,
        $mch_id,
        $key,
        $appsecret,
        $sslcert_path = "",
        $sslkey_path = "",
        $curl_proxy_host = "0.0.0.0",
        $curl_proxy_port = 0,
        $report_levenl = 0,
        $notify_url = null
    ) {
        $this->app_id          = $app_id;
        $this->mch_id          = $mch_id;
        $this->key             = $key;
        $this->appsecret       = $appsecret;
        $this->sslcert_path    = $sslcert_path;
        $this->sslkey_path     = $sslkey_path;
        $this->curl_proxy_host = $curl_proxy_host;
        $this->curl_proxy_port = $curl_proxy_port;
        $this->report_levenl   = $report_levenl;
        $this->notify_url      = $notify_url;
    }


    /**
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * @return string
     */
    public function getMchId()
    {
        return $this->mch_id;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getAppsecret()
    {
        return $this->appsecret;
    }

    /**
     * @return string
     */
    public function getSslcertPath()
    {
        return $this->sslcert_path;
    }

    /**
     * @return string
     */
    public function getSslkeyPath()
    {
        return $this->sslkey_path;
    }

    /**
     * @return string
     */
    public function getCurlProxyHost()
    {
        return $this->curl_proxy_host;
    }

    /**
     * @return int
     */
    public function getCurlProxyPort()
    {
        return $this->curl_proxy_port;
    }

    /**
     * @return int
     */
    public function getReportLevenl()
    {
        return $this->report_levenl;
    }

    /**
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notify_url;
    }

}
