<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IdServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Id Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="id-service-index">
    <div class="box box-primary">
        <div class="box-header with-border">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <!--<?php echo $this->render('_search', ['model' => $searchModel]); ?>-->
    <p>
        <?= Html::a('Criar identificação', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    </div>

    <div class="box-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'service_id',
            'service_title:ntext',
            'abrangency:ntext',
            'business_area:ntext',
            'atended_client:ntext',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
            </div>
    </div>
</div>
        