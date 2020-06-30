# baidusmsv3

#### 介绍
百度智能云短信接口V3
简单消息服务SMS V3.0

#### 使用说明


```php
require_once __DIR__ . "/baidusmsv3.php";
$config = array(
    'endPoint' => 'smsv3.bj.baidubce.com',
    'accessKey' => '028xxxxxxxxxxxxxxxxxxxxxxx',
    'secretAccessKey' => '024xxxxxxxxxxxxxxxxxxxxxxxxxxx',
);
$smsClient = new Baidusmsv3($config);
$message = array(
    "signatureId" => "sms-sign-jfMrIB59398",//短信签名
    "mobile" => $tel,//手机号码
    "template" => "sms-tmpl-yNtPhQ89473",//模板
    "contentVar" => array(
              "code" => $code,
    ),
);
echo json_encode($smsClient->sendMessage($message), JSON_UNESCAPED_UNICODE);
```



