<?php

/**
 *    配置账号信息
 */
class WxPayConfig
{
    //=======【基本信息设置】=====================================
    //
    /**
     * TODO: 修改这里配置为您自己申请的商户信息
     * 微信公众号信息配置
     *
     * APPID：绑定支付的APPID（必须配置，开户邮件中可查看）
     *
     * MCHID：商户号（必须配置，开户邮件中可查看）
     *
     * KEY：商户支付密钥，参考开户邮件设置（必须配置，登录商户平台自行设置）
     * 设置地址：https://pay.weixin.qq.com/index.php/account/api_cert
     *
     * APPSECRET：公众帐号secert（仅JSAPI支付的时候需要配置， 登录公众平台，进入开发者中心可设置），
     * 获取地址：https://mp.weixin.qq.com/advanced/advanced?action=dev&t=advanced/dev&token=2005451881&lang=zh_CN
     * @var string
     */
    function abc(){
        $weixin_settings = unserialize(variable_get('alipay_settings'));
    }
    
    const APPID = '11';//$weixin_settings['appid'];//'wx56c9d422d4dc5b37';
    const MCHID = $weixin_settings['mchid']; //'1363525502';
    const KEY = $weixin_settings['key'];
    const APPSECRET = $weixin_settings['appsecret'];//'7eec973f5bfaf2e86a6f4420d736164d';

    //=======【证书路径设置】=====================================
    /**
     * TODO：设置商户证书路径
     * 证书路径,注意应该填写绝对路径（仅退款、撤销订单时需要，可登录商户平台下载，
     * API证书下载地址：https://pay.weixin.qq.com/index.php/account/api_cert，下载之前需要安装商户操作证书）
     * @var path
     */
    const SSLCERT_PATH ='/var/www/360ys.cn-CA/api.360ys.apiclient_cert.pem';
    const SSLKEY_PATH = '/var/www/360ys.cn-CA/api.360ys.apiclient_key.pem';

    //=======【curl代理设置】===================================
    /**
     * TODO：这里设置代理机器，只有需要代理的时候才设置，不需要代理，请设置为0.0.0.0和0
     * 本例程通过curl使用HTTP POST方法，此处可修改代理服务器，
     * 默认CURL_PROXY_HOST=0.0.0.0和CURL_PROXY_PORT=0，此时不开启代理（如有需要才设置）
     * @var unknown_type
     */
    const CURL_PROXY_HOST = "0.0.0.0";//"10.152.18.220";
    const CURL_PROXY_PORT = 0;//8080;

    //=======【上报信息配置】===================================
    /**
     * TODO：接口调用上报等级，默认紧错误上报（注意：上报超时间为【1s】，上报无论成败【永不抛出异常】，
     * 不会影响接口调用流程），开启上报之后，方便微信监控请求调用的质量，建议至少
     * 开启错误上报。
     * 上报等级，0.关闭上报; 1.仅错误出错上报; 2.全量上报
     * @var int
     */
    const REPORT_LEVENL = 1;

    const NOTIFY_URL = $weixin_settings['notify_url'];

    const DEVICE_INFO = 'WEB';

    //=======【curl超时设置】===================================
    //本例程通过curl使用HTTP POST方法，此处可修改其超时时间，默认为30秒
    const CURL_TIMEOUT = 30;

    //人民币
    const MONEY_CNY = 'CNY';

    //交易类型:公众号支付
    const TRADE_TYPE_JSAPI = 'JSAPI';
    //交易类型:扫码支付
    const TRADE_TYPE_NATIVE = 'NATIVE';
    //交易类型:APP支付
    const TRADE_TYPE_APP = 'APP';

    //交易类型:APP支付
    const PACKAGE_APP = 'Sign=WXPay';

    const QR_CODE_IMG_SAVE_PATH = "/var/www/img.360ys.cn/";
    const QR_CODE_IMG_URL = "http://img.360ys.cn/";
}