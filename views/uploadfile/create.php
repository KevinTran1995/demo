<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Uploadfile */

$this->title = 'Create Uploadfile';
$this->params['breadcrumbs'][] = ['label' => 'Uploadfiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploadfile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
