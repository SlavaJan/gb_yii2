<?php
/* @var $this \yii\web\View */
/* @var $posts \common\models\Posts[] */

?>

<div class="row">
  <div class="col-sm-8 blog-main">
    <div class="row">
      <div class="col-sm-12">
          <section class="blog-post">
              <div class="panel panel-default">
<!--                  <img src="img/travel/unsplash-2.jpg" class="img-responsive" />-->
                  <div class="panel-body">
                      <p class="blog-post-date pull-right">
                          <?= $created_at ?>
                      </p>
                    <div class="blog-post-content">
                        <p class="post-text"><?= $post_text; ?></p>
                      <a class="btn btn-info" href="http://gb.yii2/index.php?r=blog">Назад</a>
                      <a class="blog-post-share pull-right" href="#">
                        <i class="material-icons">&#xE80D;</i>
                      </a>
                    </div>
                  </div>
               </div>
          </section>
      </div>
    </div>
  </div>
</div>
                