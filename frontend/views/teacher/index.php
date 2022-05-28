<?php
use yii\helpers\Url;
?>
<!-- Inner Content Start -->
<div class="innerContent-wrap">
    <div class="container">

        <!-- Teachers Start -->
        <div class="innerteacher-wrap">
            <div class="row">
                <?php
                foreach ($models as $model):
                ?>
                <div class="col-lg-3 col-md-6 ">
                    <div class="single-teachers">
                        <div class="teacherImg"> <img src="<?=$model->img?>" alt="Image">
                            <ul class="social-icons list-inline">
                                <!-- social-icons -->
                                <li class="social-facebook"> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
                                <li class="social-twitter"> <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                                <li class="social-linkedin"> <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
                                <li class="social-googleplus"> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
                            </ul>
                        </div>
                        <div class="teachers-content">
                           <a href="<?=url::to(['teacher/teacherone','id'=>$model->id])?>"> <h3><?=$model->name?></h3></a>
                            <div class="designation"><?=$model->work?></div>
                        </div>
                    </div>
                </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
        <!-- Teachers End -->
        <?php
        echo \yii\bootstrap4\LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>
    </div>
</div>
<!-- Inner Content Start -->
