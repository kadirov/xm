<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \Ka\XmChart\Modules\Chart\Models\Dto\ChartSearch */
/* @var $form ActiveForm */
?>
<div class="index">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'companySymbol') ?>

    <?= $form->field($model, 'startDate')->widget(DatePicker::class, [
        'options' => [
            'class' => 'form-control',
            'autocomplete' => 'off',
        ],
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'endDate')->widget(DatePicker::class, [
        'options' => [
            'class' => 'form-control',
            'autocomplete' => 'off',
        ],
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>


</div><!-- index -->
