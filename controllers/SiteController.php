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


//        $url = "http://api.giphy.com/v1/gifs/search?q=ryan+gosling&api_key=17fGihaZCOPTnfWmlr4JPLyS56SPiMfC&limit=100";
//        $lol = json_decode(file_get_contents($url));
//        $num = rand(1, 100);
//        echo "<pre>";
//        var_dump($lol);


        if(Yii::$app->request->isAjax){

            $url = "http://api.giphy.com/v1/gifs/search?q=ryan+gosling&api_key=17fGihaZCOPTnfWmlr4JPLyS56SPiMfC&limit=100";
            $lol = json_decode(file_get_contents($url));
            $num = rand(1, 100);

            $img = $lol->data[$num]->images->fixed_width->url;

            return  ("<img src='$img' style='width: 100%'>");
//
        }
        else{
            return $this->redirect('index');

//            $model = new ReCaptcha();
//            return $this->renderAjax('index', ['model' => $model]);
        }



    }

    public function actionForm(){

//        $mode;

        return $this->renderAjax('_form');
    }

}
