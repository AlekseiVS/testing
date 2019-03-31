<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>


<?php $form = ActiveForm::begin(['id' => 'form', 'action' => 'giphy', 'options' => ['data-pjax' => true,]]) ?>

      <?= $form->field($modelReCaptcha, 'reCaptcha')->widget(
          \himiklab\yii2\recaptcha\ReCaptcha::className(),
           ['siteKey' => '6LdFjW8UAAAAAM_kEXXn4ib22gzXU_B7wRCHDxp4']
       ) ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Enter', ['class' => 'btn btn-primary', 'id' => 'button']) ?>
        </div>
    </div>

<?php ActiveForm::end() ?>