<?php
require_once __DIR__ . "/Baidusmsv3.php";
        $config = array(
            'endPoint' => 'smsv3.bj.baidubce.com',
            'accessKey' => '028xxxxxxxxxxxxxxxxxxxxxxx',
            'secretAccessKey' => '024xxxxxxxxxxxxxxxxxxxxxxxxxxx',
        );
        $smsClient = new ApiLib_Baidusmsv3($config);
        $message = array(
            "signatureId" => "sms-sign-jfMrIB59398",
            "mobile" => $tel,
            "template" => "sms-tmpl-yNtPhQ89473",
            "contentVar" => array(
                "code" => $code,
            ),
        );
        echo json_encode($smsClient->sendMessage($message), JSON_UNESCAPED_UNICODE);