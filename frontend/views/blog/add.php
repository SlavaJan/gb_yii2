<?php
/* @var $this \yii\web\View */
/* @var $post_form \backend\models\PostAdd */
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
            
            <?= $form->field($post_form, 'post_text')->textArea() ?>
            <?= $form->field($post_form, 'post_image')->fileInput() ?>
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-lg']) ?>
            
            <?php
            ActiveForm::end();
            ?>
        </div>
     </div>
</section>