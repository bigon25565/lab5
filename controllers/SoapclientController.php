<?php

namespace app\controllers;
use yii\helpers\VarDumper;

class SoapclientController extends \yii\web\Controller

{
    public function actionIndex()
    {
        $client = new \SoapClient(null, array(
            'location' =>
                "http://lab5/web/index.php?r=soap/index",
            'uri'      => "http://lab5/web/index.php?r=soap/index",
            'trace'    => 1 ));
        $return = $client->__soapCall("gc",[]);
        print_r($return);
    }
}
