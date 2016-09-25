<?php
/* @var $this \yii\web\View */
/* @var $posts \common\models\Posts[] */
$this -> title = "Управление Twistagramm";
?>
         
<section>
    <div class="panel panel-default col-lg-4 col-lg-offset-2">
        <div class="panel-body">
            <h2>Current time</h2>
            <p><?php
            $dt = new DateTime("now", new DateTimeZone('Europe/Moscow'));
            echo $dt->format('d.m.Y, H:i:s');
            ?></p>
        </div>
     </div>
</section>

