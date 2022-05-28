<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<?php
 $menus=\common\models\Navbar::find()->all();

?>
<!--Header Start-->
<div class="header-wrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 navbar-light">
                <?php
                $logo=\common\models\Logo::findOne(['id'=>1]);
                ?>
                <div class="logo"> <a href="<?=url::home()?>"><img alt="" class="logo-default" src="<?=$logo->img?>"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="navigation-wrap" id="filters">
                    <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">Menu</a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
                            <ul class="navbar-nav mr-auto">
<!--                                <li class="nav-item"> <a class="nav-link active" href="--><?//=url::home()?><!--">Home <span class="sr-only">(current)</span></a> </li>-->
                                <?php
                                foreach ($menus as $menu):
                                ?>
                                <li class="nav-item"><a class="nav-link" href="<?=url::to([''.$menu->url.''])?>"><?=$menu->name?></a></li>
                                <?php
                                      endforeach;
                                      ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="header_info">
<!--                    <div class="search"><a href="#"><i class="fas fa-search"></i></a></div>-->
<!--                    <div class="loginwrp"><a href="login.html">Login/Register</a></div>-->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Header End-->


        <?= $content ?>
<!-- Footer Start -->
<div class="footer-wrap">
    <div class="container">
        <div class="row">
            <?php
            $footer=\common\models\Footer::findOne(['id'=>1]);
            ?>
            <div class="col-lg-4">
                <div class="footer_logo"><img alt="" class="footer-default" src="<?=$logo->img?>"></div>
                <p><?=$footer->content?></p>
            </div>
            <div class="col-lg-2 col-md-3">
                <h3><?=yii::t('app','quick')?></h3>
                <ul class="footer-links">
<!--                    <li> <a href="index.html">Home</a></li>-->
                    <?php
                    foreach ($menus as $menu):
                        ?>
                        <li ><a href="<?=url::to([''.$menu->url.''])?>"><?=$menu->name?></a></li>
                    <?php
                    endforeach;
                    ?>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h3><?=yii::t('app','open')?></h3>
                <ul class="unorderList hourswrp">
                    <?php
                    $hours=\common\models\Hours::find()->all();
                    foreach ($hours as $hour):
                    ?>
                    <li><?=$hour->title?> <span><?=$hour->hours?></span></li>
                        <?php
                    endforeach;
                        ?>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="footer_info">
                    <h3><?=yii::t('app','get')?></h3>
                    <ul class="footer-adress">
                        <li class="footer_address"> <i class="fas fa-map-signs"></i> <span><?=$footer->location?></span> </li>
                        <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a href="mailto:<?=$footer->email?>"> <?=$footer->email?></a></span> </li>
                        <li class="footer_phone"> <i class="fas fa-phone-alt"></i> <span><a href="tel:<?=$footer->tel?>"> <?=$footer->tel?></a></span> </li>
                    </ul>
                    <div class="social-icons footer_icon">
                        <ul>
                            <?php
                             $footericons=\common\models\Footericon::find()->all();
                             foreach ($footericons as $footericon):
                            ?>
                            <li><a href="<?=$footericon->url?>"><i class="<?=$footericon->icon?>" aria-hidden="true"></i></a></li>
                                 <?php
                             endforeach;
                                 ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!--Copyright Start-->
<div class="footer-bottom text-center">
    <div class="container">
        <div class="copyright-text">Copyright © International School System 2020. All Rights Reserved</div>
    </div>
</div>
<!--Copyright End-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
