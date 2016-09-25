<?php
/* @var $this \yii\web\View */
/* @var $posts \common\models\Posts[] */
$this -> title = "Новый пост";
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
         
<section>
    <div class="panel panel-default col-lg-4 col-lg-offset-2">
        <div class="panel-body">
            <h2>Добавьте свой пост</h2>
            <?php
            $form = ActiveForm::begin([
                'id' => 'new-post-form',
                'options' => ['class' => 'form-vertical'],
            ]);
            ?>
            
            <?= $form->field($post, 'post_text')->textInput() ?>
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-lg']) ?>
            
            <?php
            ActiveForm::end();
            ?>
        </div>
     </div>
</section>