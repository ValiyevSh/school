<?php
use yii\helpers\Url;
?>
<div class="innerContent-wrap">
    <div class="container">
        <div class="blog_inner ">
            <ul class="row unorderList">
                <?php
                foreach ($models as $model):
                ?>
                <li class="col-lg-4 col-md-6">
                    <div class="blog_box">
                        <div class="blogImg"><img width="350px" height="250px" src="<?=$model->img?>" alt="">
                            <div class="time_box"><span><?=$model->date?></span></div>
                        </div>
                        <div class="path_box">
                            <h3><a href="<?=url::to(['news/newsone','id'=>$model->id])?>"><?=$model->title?></a></h3>
                            <p><?=substr($model->content,0,85)?>...</p>
                        </div>
                    </div>
                </li>
               <?
                endforeach;
               ?>
            </ul>

                <?php
                echo \yii\bootstrap4\LinkPager::widget([
                    'pagination' => $pages,

                ]);
                ?>

        </div>
    </div>
</div>
