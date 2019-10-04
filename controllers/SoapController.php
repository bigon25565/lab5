<?php

namespace app\controllers;
use app\models\Server;
use yii\helpers\VarDumper;
use yii\web\Controller;
class SoapController extends \yii\web\Controller

{
    public $enableCsrfValidation = false;
//    public function gc()
//    {
//        return 'asdasd';
//    }
//    public function actionIndex()
//    {
//
//        $server=new \SoapServer(NULL,[
//            'uri' =>  'http://lab5/web/index.php?r=soap/index',
//            'classmap'=>[
//                'lol'=>'Server',
//            ]
//        ]);
////        $server->setClass("Server");
////        $server->addFunction('getIt');
//        $server->setClass('SoapController');
////        $server->addFunction(SOAP_FUNCTIONS_ALL);
//        $server->handle();
//    }
Public function JokesOnYa()
{
    
}
//

    public function actionIndex(){
        return Server::server();
//        $server = new \SoapServer(null, array('uri' => "http://lab5/web/index.php?r=soap/index"));
//        $server->setObject(new SoapController());
//        ob_start();
//        $server->addFunction("hello");
//        $server->addFunction(SOAP_FUNCTIONS_ALL);
    }
    public function actionClient()
    {
        $client = new \SoapClient(null, array(
            'location' =>
                "http://lab5/web/index.php?r=soap/index",
            'uri' => "http://lab5/web/index.php?r=soap/index",
            'trace' => 1));
        $return = $client->__soapCall("Hello", []);
        var_dump($return);
    }

}
