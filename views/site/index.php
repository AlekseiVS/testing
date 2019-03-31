<?php

use yii\widgets\Pjax;

?>

<h4>Testing exercise</h4>

<!-- Button trigger modal -->

<a data-toggle="modal" data-target="#exampleModal" href="#">link 1</a>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Window</h5>


                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" id="close">&times;</span>
                </button>

            </div>
            <div class="modal-body">

                <?php Pjax::begin(); ?>

                    <?= $this->render('_form', ['modelReCaptcha' => $modelReCaptcha])?>

                <?php Pjax::end(); ?>

            </div>

        </div>
    </div>
</div>


<script>

    $('#exampleModal').on('hidden.bs.modal', function () {
        location.reload();
    })

</script>

