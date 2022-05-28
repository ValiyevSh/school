<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="innerContent-wrap">
    <div class="container">
        <div class="cont_info ">
            <div class="row">
                <?php
                $contactext=\common\models\Contacttext::find()->all();
                foreach ($contactext as $item):
                ?>
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="address-item style">
                        <div class="address-icon"> <i class="<?=$item->icon?>" id="icon" ></i> </div>
                        <div class="address-text">
                            <h3 class="contact-title"><?=$item->title?></h3>
                            <ul class="unorderList">
                                <?=$item->content?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">

                <!-- Register Start -->
                <div class="login-wrap">
                    <div class="contact-info login_box">
                        <div class="contact-form loginWrp registerWrp">
<!--                            <form id="contactForm" novalidate="">-->
                                <?php

                                $form = ActiveForm::begin([
                                    'id' => 'login-form',
                                    'options' => ['class' => 'form-horizontal'],
                                ]) ?>

                                <h3>Get In Touch</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <?= $form->field($model, 'firstname')->textInput(['placeholder'=>'Firstname...'])->label('') ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <?= $form->field($model, 'lastname')->textInput(['placeholder'=>'Last Name...'])->label('') ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <?= $form->field($model, 'email')->textInput(['placeholder'=>'Email...'])->label('') ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <?= $form->field($model, 'phone')->textInput(['placeholder'=>'Phone...'])->label('') ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <?= $form->field($model, 'message')->textarea(['placeholder'=>'Message...'])->label('')?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">

                                            <?= Html::submitButton('Submit', ['class' => 'default-btn btn send_btn']) ?>
                                        </div>
                                    </div>
                                </div>
                            <?php ActiveForm::end() ?>
                        </div>
                    </div>
                </div>
                <!-- Register End -->
            </div>
            <div class="col-lg-5">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021674.414950062!2d41.11423519392498!3d42.30298232333148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd7e64f626b%3A0x4f907964122d4ac2!2sGeorgia!5e0!3m2!1sen!2s!4v1545313690667" width="100%" height="511" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

