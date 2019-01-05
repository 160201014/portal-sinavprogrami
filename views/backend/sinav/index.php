<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SinavSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sinavs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sinav-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Sınav Yarat', ['create'], ['class' => 'btn btn-primary btn-lg btn-block']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'tarih',
            'saat',
            'yer',
            'akademisyen',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
