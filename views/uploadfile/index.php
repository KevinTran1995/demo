<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UploadfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uploadfiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploadfile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Upload File', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            [
                'format' => 'raw',
                'attribute' => 'image',
                'value' => function($model)
                {
                    return Html::img('@web/upload/' .$model->image, ['style' => 'width:200px']);
                }
            ],
            //'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
