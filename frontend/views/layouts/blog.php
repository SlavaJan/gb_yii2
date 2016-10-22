<?php
/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\BlogAsset;
use yii\helpers\Html;
use yii\helpers\Url;

BlogAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?= Html::csrfMetaTags() ?>
   
  </head>

  <body>
    <?php $this->beginBody() ?>
    <div class="navbar navbar-material-blog navbar-info navbar-absolute-top navbar-overlay">

      <div class="navbar-image" style="background-image: url('img/travel/unsplash-1.jpg');background-position: center 30%;"></div>

      <div class="navbar-wrapper container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="<?= Url::to(['blog/index']); ?>"><img src="img/travel/vinyl.png" class="img-responsive" style="max-width: 88px;display: inline-block;border: 5px solid #999;border-radius: 50%;"> Twistagramm</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">
            <li class="active dropdown">
              <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Stories <b class="caret"></b></a>
              <ul class="dropdown-menu">
                
              </ul>
            </li>
<!--            <li class="dropdown">
              <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Filters <b class="caret"></b></a>
              <ul class="dropdown-menu">
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Post <b class="caret"></b></a>
              <ul class="dropdown-menu">
                
              </ul>
            </li>
            <li><a href="page-about.html">About</a></li>
            <li><a href="page-contact.html">Contact</a></li>-->
            <li class="dropdown hidden-sm">
              <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Вход/Регистрация<b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="<?= Url::to(['blog/login']); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Вход</a></li>
                  <li><a href="<?= Url::to(['blog/signup']); ?>"><i class="fa fa-user-plus" aria-hidden="true"></i> Новый пользователь</a></li>
                  <li><a href="<?= Url::to(['blog/logout']); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Выход</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container blog-content">

    <?= $content ?>

    </div><!-- /.container -->

    <footer class="blog-footer">

      <div id="links">
        <div class="container">
          <div class="row">
            <div class="col-sm-2">
            <i class="material-icons brand">&#xE871;</i>
            </div>

            <div class="col-sm-8 text-center offset">
              <ul class="list-inline">
                <li><a href="index.html">Home</a></li>
                <li><a href="page-about.html">About</a></li>
                <li><a href="doc-buttons.html">Documentation</a></li>
                <li><a href="page-contact.html">Contact</a></li>
              </ul>
            </div>

            <div class="col-md-2 text-right offset">
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </footer>

    <button class="material-scrolltop info" type="button"></button>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>