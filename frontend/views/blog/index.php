<?php
/* @var $this \yii\web\View */
/* @var $posts \common\models\Posts[] */

use yii\helpers\Url;
$this -> title = "Twistagramm";

?>

<div class="row">
  <div class="col-sm-8 blog-main">
    <div class="row">
      <div class="col-sm-12">
          <?php foreach ($posts as $key): ?>                
          <section class="blog-post">
              <div class="panel panel-default">
<!--                  <img src="img/travel/unsplash-2.jpg" class="img-responsive" />-->
                  <div class="panel-body">
                      <p class="blog-post-date pull-right">
                          <?= $key -> created_at ?>
                      </p>
                    
                    <div class="blog-post-content">
                        <a href="<?= Url::to(['blog/single', 'id' => $key -> post_id]); ?>">
                            <p><?= $key -> post_text ?></p>
                      </a>
                      
                      <a class="btn btn-info" href="<?= Url::to(['blog/single', 'id' => $key -> post_id]); ?>">Read more</a>
                      <a class="blog-post-share pull-right" href="#">
                        <i class="material-icons">&#xE80D;</i>
                      </a>
                    </div>
                  </div>
               </div>
          </section>
          <?php endforeach; ?>
         </div>
    </div>
  </div>
</div>
                