<?php
/**
 * Created by PhpStorm.
 * User: osokoliu
 * Date: 3/29/19
 * Time: 2:35 PM
 */

namespace app\models;


use yii\base\Model;

class ReCaptcha extends Model
{


    public $reCaptcha;

    public function rules()
    {
        return [

            [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LdFjW8UAAAAAEySyJXDTiWhheKuKyj8tj2OjhFm', 'uncheckedMessage' => 'Please confirm that you are not a bot.']

        ];
    }


}