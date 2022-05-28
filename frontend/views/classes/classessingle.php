
<!-- Inner Content Start -->
<div class="innerContent-wrap">
    <div class="container">
        <!-- Classes Details Start -->
        <div class="classDetails-wrap">
            <div class="row">
                <div class="col-lg-8">
                    <div class="class_left ">
                        <div class="class_Img"><img src="<?=$classes->img?>" alt="">
                            <div class="time_box"><span>08:00 am - 10:00 am</span></div>
                        </div>
                        <h3><?=$classes->title?></h3>
                        <p><?=$classes->content?></p>
                        <div class="sidebar-item">
                            <ul class="class-details">
                                <li>
                                    <div class="name"><i class="fas fa-pencil-alt"></i>Start Date</div>
                                    <div class="info"><?=$classes->start_date?></div>
                                </li>
                                <li>
                                    <div class="name"><i class="fas fa-user" aria-hidden="true"></i>Years Old</div>
                                    <div class="info"><?=$classes->years_old?></div>
                                </li>
                                <li>
                                    <div class="name"><i class="fas fa-building" aria-hidden="true"></i>Class Size</div>
                                    <div class="info"><?=$classes->classes_size?></div>
                                </li>
                                <li>
                                    <div class="name"><i class="fas fa-bus" aria-hidden="true"></i>Carry Time</div>
                                    <div class="info"><?=$classes->carry_time?></div>
                                </li>
                                <li>
                                    <div class="name"><i class="fas fa-calendar" aria-hidden="true"></i>Coures Duration</div>
                                    <div class="info"><?=$classes->coures_duration?></div>
                                </li>
                                <li>
                                    <div class="name"><i class="fas fa-clock" aria-hidden="true"></i>Class Time</div>
                                    <div class="info"><?=$classes->time?></div>
                                </li>
                                <li>
                                    <div class="name"><i class="fas fa-thumbs-up" aria-hidden="true"></i>Rating</div>
                                    <div class="info rating">
                                        <?php
                                        echo \kartik\rating\StarRating::widget([
                                            'name' => 'rating_21',
                                            'value' => 4,
                                            'pluginOptions' => [
                                                'readonly' => true,
                                                'showClear' => false,
                                                'showCaption' => false,
                                            ],
                                        ]);
                                        ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="name"><i class="fas fa-money-bill-alt"></i>Tution Free</div>
                                    <div class="info">$ <?=$classes->tution_free?></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-widgets widget_search ">
                        <h4>Search</h4>
                        <form action="#" class="sidebar-search-form">
                            <input type="search" name="search" placeholder="Search..">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="single-widgets widget_category ">
                        <h4>Categories</h4>
                        <ul class="unorderList">
                            <li><a href="#">Apartement <span>09</span></a></li>
                            <li><a href="#">Villa <span>12</span></a></li>
                            <li><a href="#">Family House <span>19</span></a> </li>
                            <li><a href="#">Modern Villa <span>17</span></a></li>
                            <li><a href="#">Town House <span>10</span></a></li>
                            <li><a href="#">Office <span>10</span></a></li>
                        </ul>
                    </div>
                    <div class="single-widgets widget_category ">
                        <h4>Recents Property</h4>
                        <ul class="property_sec">
                            <li>
                                <div class="rec_proprty">
                                    <div class="propertyImg"><img src="images/gallery-1.jpg"></div>
                                    <div class="property_info">
                                        <h4><a href="#">1324 Tennessee Road</a></h4>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rec_proprty">
                                    <div class="propertyImg"><img src="images/gallery-2.jpg"></div>
                                    <div class="property_info">
                                        <h4><a href="#">1324 Tennessee Road</a></h4>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rec_proprty">
                                    <div class="propertyImg"><img src="images/gallery-3.jpg"></div>
                                    <div class="property_info">
                                        <h4><a href="#">1324 Tennessee Road</a></h4>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Classes Details End -->
    </div>
</div>
