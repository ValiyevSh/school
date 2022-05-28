<?php
use yii\helpers\Url;
?>
<!-- Inner Content Start -->
<div class="innerContent-wrap">
    <div class="container">

        <!-- Classes Start -->
        <div class="class-wrap">
            <ul class="row unorderList">
                <?php
                foreach ($models as $model):
                ?>
                <li class="col-lg-4 col-md-6">
                    <div class="class_box">
                        <div class="class_Img"><img width="350px" height="250px" src="<?=$model->img?>" alt="">
                            <div class="time_box"><span><?=$model->time?></span></div>
                        </div>
                        <div class="path_box">
                            <h3><a href="<?=url::to(['classes/classessingle','id'=>$model->id])?>"><?=$model->title?></a></h3>
                            <p><?=substr($model->content,0,100)?></p>
                            <div class="students_box">
                                <div class="students"> <?=$model->classes_size?></div>
                                <div class="stud_fee">Fee: $<?=$model->tution_free?></div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
                endforeach;

                ?>
            </ul>
        </div>
        <!-- Classes End -->

    </div>
   <center>  <?php
       echo \yii\bootstrap4\LinkPager::widget([
           'pagination' => $pages,
       ]);
       ?></center>
</div>
<!-- Inner Content Start -->
