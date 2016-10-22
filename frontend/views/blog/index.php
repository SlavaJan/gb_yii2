<?php
/* @var $this \yii\web\View */
/* @var $posts \common\models\Posts[] */
use common\models\Posts;
use yii\helpers\Html;
use yii\helpers\Url;
$this -> title = "Twistagramm";


?>

<div class="row">
  <div class="col-sm-8 blog-main">
    <div class="row">
      <div class="col-sm-12">
          <?php foreach ($posts as $key): ?>
          <?php
            $post_content = $key->getContent();
            if ($post_content->mode === Posts::MODE_BOTH){
          ?>
          <section class="blog-post">
              <div class="panel panel-default">
                  <img src="<?= $key -> post_image ?>" class="img-responsive" />
                  <div class="panel-body">
                      <p class="blog-post-author pull-left">
                          <?= $key -> created_at ?>
                      </p>
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
          <?php } ?>
          <?php endforeach; ?>
          
         </div>
    </div>
   
    <div class="row">
      <div class="col-sm-12">
          <?php foreach ($posts as $key): ?>
            <?php
                $post_content = $key->getContent();
                if ($post_content->mode === Posts::MODE_TEXT){
            ?>
          <section class="blog-post">
              <div class="panel panel-default">
                  <div class="panel-body">
                      <p class="blog-post-author pull-left">
                          <?= var_dump($key->user_id) ?>
                      </p>
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
          <?php } ?>
          <?php endforeach; ?>
          
         </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
          <?php foreach ($posts as $key): ?>
            <?php
                if ($post_content->mode === Posts::MODE_IMAGE){
            ?>
          <section class="blog-post">
              <div class="panel panel-default">
                  <img src="<?= $key -> post_image ?>" class="img-responsive" />
                  <div class="panel-body">
                      <p class="blog-post-author pull-left">
                          <?= $key -> created_at ?>
                      </p>
                      <p class="blog-post-date pull-right">
                          <?= $key -> created_at ?>
                      </p>
                    
                    <div class="blog-post-content">
                      <a class="btn btn-info" href="<?= Url::to(['blog/single', 'id' => $key -> post_id]); ?>">Read more</a>
                      <a class="blog-post-share pull-right" href="#">
                        <i class="material-icons">&#xE80D;</i>
                      </a>
                    </div>
                  </div>
               </div>
              
          </section>
          <?php } ?>
          <?php endforeach; ?>
          
         </div>
    </div>
  </div>
</div>
                