<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;

?>



<!-- Button trigger modal -->

    <a data-toggle="modal" data-target="#exampleModal" href="index">Link 1</a>


<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>


                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">



                <?php Pjax::begin(); ?>


                <?= $this->render('_form');?>

                <?php $form = ActiveForm::begin(['id' => 'form', 'action' => 'ajax', 'options' => ['data-pjax' => true,]]) ?>


                                    <?= $form->field($model, 'reCaptcha')->widget(
                                        \himiklab\yii2\recaptcha\ReCaptcha::className(),
                                        ['siteKey' => '6LdFjW8UAAAAAM_kEXXn4ib22gzXU_B7wRCHDxp4']
                                    ) ?>


                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Enter', ['class' => 'btn btn-primary', 'id' => 'button']) ?>

                    </div>
                </div>

                <?php ActiveForm::end() ?>


                <?php Pjax::end(); ?>


            </div>

        </div>
    </div>
</div>





<!--<script>-->
<!---->
<!--    $(document).ready(function(){-->
<!---->
<!--        $("#button").click(function(){-->
<!---->
<!--            var count = 0;-->
<!--            $.ajax({-->
<!--                type: 'POST',-->
<!--                url: 'ajax',-->
<!--                data: 'count='+(count),-->
<!--                success: function(data) {-->
<!---->
<!--                    console.log(data);-->
<!---->
<!--                    var form = document.getElementById('form');-->
<!--                    var newDiv = document.createElement('div');-->
<!--                    newDiv.innerHTML = "<img src='"+data+"'>";-->
<!--                    form.appendChild(newDiv);-->
<!---->
<!---->
<!--                }-->
<!--            });-->
<!---->
<!--        });-->
<!---->
<!--    });-->
<!---->
<!--</script>-->