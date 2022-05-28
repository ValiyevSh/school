
<div class="innerContent-wrap">
    <div class="container">

        <!-- Faqs Start -->
        <div class="faqs-wrap ">

            <!--Question-->
            <div class="faqs">
                <?php
                $realabout=\common\models\Realabout::find()->all();

                ?>
                <div class="panel-group" id="accordion">
                    <?php
                       foreach ($realabout as $real=>$key):
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse<?=$real?>"><?=$key->title?></a> </h4>
                        </div>
                        <div id="collapse<?=$real?>" class="panel-collapse collapse">
                            <div style="color: black !important;" class="panel-body"><?=$key->content?></div>
                        </div>
                    </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
        <!-- Faqs End -->
    </div>
</div>
<!-- Inner Content Start -->
