<?php

namespace app\controllers;
use app\models\Server;

class SoapController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $server=new \SoapServer(NULL,[
            'uri' =>  'http://lab5/web/index.php?r=soap/index',
            'classmap'=>[
                'lol'=>'lel',
            ]
        ]);
        $server->addFunction('getCat');
        $server->addFunction('getIt');
        $server->addFunction('getItNot');
    }


}
