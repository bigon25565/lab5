<?php

namespace app\controllers;
use app\models\Server;
use yii\helpers\VarDumper;

class SoapController extends \yii\web\Controller

{
    public function gc()
    {
        return Server::getCat();
    }
    public function actionIndex()
    {

        $server=new \SoapServer(NULL,[
            'uri' =>  'http://lab5/web/index.php?r=soap/index',
            'classmap'=>[
                'lol'=>'Server',
            ]
        ]);
//        $server->setClass("Server");
//        $server->addFunction('getIt');
        $server->setClass('SoapController');
//        $server->addFunction(SOAP_FUNCTIONS_ALL);
        $server->handle();
    }


}
