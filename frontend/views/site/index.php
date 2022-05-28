<?php
use yii\helpers\Url;
?>
<!-- Revolution slider start -->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <?php
            $sliders=\common\models\Slider::find()->all();
            foreach ($sliders as $slider):
            ?>
            <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="<?=$slider->img?>" data-lazyload="<?=$slider->img?>">
                <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600"><span> <?=$slider->title?> </span></div>
                <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2200"><?=$slider->content?></div>
                <div class="caption lfb large-title tp-resizeme slidertext4" data-x="330" data-y="350" data-speed="600" data-start="2800"> <a href="<?=url::to(['contact/index'])?>"><i class="fas fa-edit"></i> <?=yii::t('app','send')?></a> </div>
                <div class="caption lfb large-title tp-resizeme slidertext4 slidertext5" data-x="610" data-y="350" data-speed="600" data-start="3400"> <a href="#"><i class="far fa-calendar-alt"></i> <?=yii::t('app','sinf')?></a> </div>
            </li>
            <?php
            endforeach;
            ?>
        </ul>
    </div>
</div>
<!-- Revolution slider end -->

<!-- School Start -->
<div class="our-course-categories-two ">
    <div class="container">
        <div class="categories_wrap">
            <ul class="row unorderList">
                <?php
                  $aboutimgs=\common\models\Aboutimg::find()->all();
                  foreach ($aboutimgs as $aboutimg):
                ?>
                <li class="col-lg-3 col-md-6">
                    <!-- single-course-categories -->
                    <div class="categories-course">
                        <div class="item-inner">
                            <div class="cours-icon"> <span class="coure-icon-inner"> <img src="<?=$aboutimg->img?>" alt=""> </span> </div>
                            <div class="cours-title">
                                <h4><?=$aboutimg->title?></h4>
                                <p><?=$aboutimg->content?></p>
                            </div>
                        </div>
                    </div>
                    <!--// single-course-categories -->
                </li>
                <?php
                endforeach;
                ?>
            </ul>
        </div>
    </div>
</div>

<!-- School End -->

<!-- About Start -->
<div class="about-wrap  " id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <?php
                $aboutone=\common\models\Aboutone::findOne(['id'=>1]);
                ?>
                <div class="aboutImg"><img src="<?=$aboutone->img?>" alt=""></div>
            </div>
            <div class="col-lg-5">
                <div class="about_box">
                    <div class="title">
                        <h1><?=yii::t('app','onlayn')?></h1>
                    </div>
                    <p><?=yii::t('app','lorem')?></p>
                    <ul class="edu_list">
                        <?php
                        $abouticons=\common\models\Abouticon::find()->limit(3)->all();
                        foreach ($abouticons as $abouticon):
                        ?>
                        <li>
                            <div class="learing-wrp">
                                <div class="edu_icon"><img src="<?=$abouticon->img?>" alt=""></div>
                                <div class="learn_info">
                                    <h3><?=$abouticon->title?></h3>
                                    <p><?=$abouticon->content?></p>
                                </div>
                            </div>
                        </li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Classes Start -->
<div class="class-wrap">
    <div class="container">
        <div class="title">
            <h1> <?=yii::t('app','our')?> </h1>
        </div>
        <ul class="owl-carousel  ">
            <?php
             $classes=\common\models\Classes::find()->where(['status'=>1])->orderBy(['id'=>SORT_DESC])->limit(3)->all();
            foreach ($classes as $class):
            ?>
            <li class="item">
                <div class="class_box">
                    <div class="class_Img"><img width="350px" height="250px" src="<?=$class->img?>" alt="">
                        <div class="time_box"><span><?=$class->time?></span></div>
                    </div>
                    <div class="path_box">
                        <h3><a href="<?=url::to(['classes/classessingle','id'=>$class->id])?>"><?=$class->title?></a></h3>
                        <p><?=substr($class->content,0,100)?>...</p>
                        <div class="students_box">
                            <div class="students">Students: <?=$class->classes_size?></div>
                            <div class="stud_fee">Fee: <?=$class->tution_free?> $</div>
                        </div>
                    </div>
                </div>
            </li>
<?php
  endforeach;
            ?>
        </ul>
    </div>
</div>
<!-- Classes End -->

<!-- Choice Start -->
<div class="choice-wrap ">
    <div class="container">
        <div class="title">
            <h1> <?=yii::t('app','we')?></h1>
        </div>
        <p><?=Yii::t('app','wes')?>></p>
        <div class="readmore"><a href="<?=url::to(['contact/index'])?>"><?=yii::t('app','send')?></a></div>
    </div>
</div>
<!-- Choice End -->

<!-- Video Start -->
<div class="video-wrap  ">
    <div class="container">
        <div class="title center_title">
            <h1><?=yii::t('app','video')?></h1>
        </div>
        <div class="video">
            <?php
             $video=\common\models\Video::findOne(['id'=>2]);
            ?>
            <div style="background: url("<?=$video->img?>")" class="playbtn"><a data-fancybox="" href="<?=$video->url?>"><span></span></a></div>
        </div>
    </div>
</div>
<!-- Video End -->

<!-- Gallery Start -->
<div class="gallery-wrap ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="gallery_box">
                    <div class="gallery_left">
                        <div class="title">
                            <h1><?=yii::t('app','gallery')?></h1>
                        </div>
                        <p><?=yii::t('app','gallerylorem')?></p>
                        <div class="readmore"><a href="#"><?=yii::t('app','see')?></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <?php
                    $gallerys=\common\models\Gallery::find()->orderBy(['id' => SORT_DESC])->limit(6)->all();
                    foreach ($gallerys as $gallery):
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="galleryImg"><img src="<?=$gallery->img?>" alt="">
                            <div class="portfolio-overley">
                                <div class="content"> <a href="<?=$gallery->img?>" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fas fa-search-plus"></i></a> </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->

<!-- Testimonials Start -->
<div class="testimonials-wrap ">
    <div class="container">
        <div class="title">

            <h1> <?=yii::t('app','parent')?> </h1>
        </div>
        <ul class="owl-carousel testimonials_list unorderList">
            <li class="item">
                <div class="testimonials_sec">
                    <div class="client_box">
                        <div class="clientImg"><img alt="" src="images/comment-img-1.jpg"></div>
                        <ul class="unorderList starWrp">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere.</p>
                    <h3>David Malan <span>Aliquam sodales</span></h3>
                    <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
                </div>
            </li>
            <li class="item">
                <div class="testimonials_sec">
                    <div class="client_box">
                        <div class="clientImg"><img alt="" src="images/comment-img-2.jpg"></div>
                        <ul class="unorderList starWrp">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere. </p>
                    <h3>David Malan <span>Aliquam sodales</span></h3>
                    <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
                </div>
            </li>
            <li class="item">
                <div class="testimonials_sec">
                    <div class="client_box">
                        <div class="clientImg"><img alt="" src="images/comment-img-3.jpg"></div>
                        <ul class="unorderList starWrp">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere.</p>
                    <h3>David Malan <span>Aliquam sodales</span></h3>
                    <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
                </div>
            </li>
            <li class="item">
                <div class="testimonials_sec">
                    <div class="client_box">
                        <div class="clientImg"><img alt="" src="images/comment-img-1.jpg"></div>
                        <ul class="unorderList starWrp">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere.</p>
                    <h3>David Malan <span>Aliquam sodales</span></h3>
                    <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- Testimonials End -->

<!-- Enroll Start -->
<div class="choice-wrap enroll-wrap">
    <div class="container">
        <?php
        $contact=\common\models\Contact::findOne(['id'=>2]);
        ?>
        <div class="title">
            <h1><?=$contact->title?></h1>
        </div>
        <p><?=$contact->content?></p>
        <div class="phonewrp"><img src="images/phone_icon.png" alt=""><a href="tel:<?=$contact->number?>"><?=$contact->number?></a></div>
    </div>
</div>
<!-- Enroll End -->

<!-- Teacher Start -->
<section class="teachers-area-three teacher-wrap pt-100 pb-70  ">
    <div class="container">
        <div class="title center_title">
            <h1><?=yii::t('app','teacher')?></h1>
        </div>
        <div class="row">
            <?php

            $teachers=\common\models\Teacher::find()->where(['status'=>1])->orderBy(['id'=>SORT_DESC])->limit(4)->all();
            foreach ($teachers as $teacher):
            ?>
            <div class="col-lg-3 col-sm-6">
                <div class="single-teachers">
                    <div class="teacherImg"> <img src="<?=$teacher->img?>" alt="Image">
                        <ul class="social-icons list-inline">
                            <!-- social-icons -->
                            <li class="social-facebook"> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
                            <li class="social-twitter"> <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                            <li class="social-linkedin"> <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
                            <li class="social-googleplus"> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
                        </ul>
                    </div>
                    <div class="teachers-content">
                       <a href="<?=url::to(['teacher/teacherone','id'=>$teacher->id])?>"> <h3><?=$teacher->name?></h3></a>
                        <div class="designation"><?=$teacher->work?></div>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>

<!-- Teacher Start -->

<!-- Blog Start -->
<div class="blog-wrap flight-wrap ">
    <div class="container">
        <div class="title">
            <h1> <?=yii::t('app','news')?> </h1>
        </div>
        <ul class="row unorderList">
            <?php
            $news=\common\models\News::find()->where(['status'=>1])->orderBy(['id'=>SORT_DESC])->limit(3)->all();
            foreach($news as $new):
            ?>
            <li class="col-lg-4">
                <div class="blog_box">
                    <div class="blogImg"><img src="<?=$new->img?>" alt="">
                        <div class="time_box"><span><?=$new->date?></span></div>
                    </div>
                    <div class="path_box">
                        <h3><a href="<?=url::to(['news/newsone','id'=>$new->id])?>"><?=$new->title?></a></h3>
                        <p><?=substr($new->content,0,80)?>...</p>
                    </div>
                </div>
            </li>
            <?php
            endforeach;
            ?>
        </ul>
    </div>
</div>
<!-- Blog End -->




