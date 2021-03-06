<?php
use yii\web\View;
$this->registerJsFile('@web/js/jquery.galleriffic.js', ['position' => View::POS_BEGIN]);
$this->registerJsFile('@web/js/jquery.opacityrollover.js', ['position' => View::POS_BEGIN]);
$this->registerJsFile('@web/js/gallery.js', ['position' => View::POS_BEGIN]);
?>

<div class="content-padding-2">
    <div class="container_12">
        <div class="wrapper">
            <div class="grid_12">
                <div class="padding-grid-1">
                    <h3 class="letter">Our <strong>Gallery</strong></h3>
                    <div id="js">
                        <div class="js-padding">
                            <div id="gallery" class="content">
                                <div class="wrapper">
                                    <div class="slideshow-container">
                                        <div id="slideshow" class="slideshow"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="thumbs" class="navigation">
                            <ul class="thumbs noscript">
                                <?$i = 0; foreach($images as $img):?>
                                    <?php $i++?>
                                    <li class="<?if($i%3 == 0):?>last<?endif;?>">
                                        <a class="thumb" href="images/<?=$img->big?>"> <img src="images/<?=$img->thumb?>" /> </a>
                                    </li>
                                <?endforeach;?>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>