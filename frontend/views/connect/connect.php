<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var dektrium\user\models\User $model
 * @var dektrium\user\models\Account $account
 */

$this->title = Yii::t('common', 'Connect account');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 padding-v-1">
            <div class="alert alert-info">
                <p>
                    <?= Yii::t('common', 'In order to finish your registration, we need you to enter your email address.') ?>
                </p>
            </div>
            <div class="panel padding-1 padding-v-0">
                <div class="panel-body">
                    <?php $form = ActiveForm::begin([
                        'id' => 'connect-account-form',
                    ]); ?>
                    
                    <div class="row">
                        <?= $form->field($model, 'email'); ?>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <?= Html::submitButton(Yii::t('common', 'Continue'), ['class' => 'btn btn-success btn-block']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>