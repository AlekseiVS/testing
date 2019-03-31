<?php

namespace app\controllers;

use app\models\ReCaptcha;
use yii\web\Controller;
use Yii;
use yii\helpers\Url;

class SiteController extends Controller
{

    public function actionIndex(){

        $modelReCaptcha = new ReCaptcha();

        return $this->render('index', ['modelReCaptcha' => $modelReCaptcha]);
    }



    public function actionGiphy(){


        if(Yii::$app->request->isPjax){
            $url = "http://api.giphy.com/v1/gifs/search?q=ryan+gosling&api_key=17fGihaZCOPTnfWmlr4JPLyS56SPiMfC&limit=100";
            $modelsGiphy = json_decode(file_get_contents($url));
            $num = rand(1, 100);
            $img = $modelsGiphy->data[$num]->images->fixed_width->url;
            return  ("<img src='$img' style='width: 100%'>");
        }
        else{
            return $this->redirect('index');

        }



    }


}
