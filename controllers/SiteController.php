<?php

namespace app\controllers;

use app\models\ReCaptcha;
use yii\web\Controller;
use Yii;

class SiteController extends Controller
{

    public function actionIndex(){


        $model = new ReCaptcha();

        return $this->render('index', ['model' => $model]);

    }

    public function actionAjax(){

        $url = "http://api.giphy.com/v1/gifs/search?q=ryan+gosling&api_key=17fGihaZCOPTnfWmlr4JPLyS56SPiMfC";
        $lol = json_decode(file_get_contents($url));
        $count = Yii::$app->request->post('count');

        echo $lol->data[$count]->images->fixed_height_still->url;


    }

}
