<?php
/**
 * Created by nvdiepse.
 * User: NgoGiaDiep
 * Date: 6/25/2019
 * Time: 4:14 PM
 */
use kartik\grid\GridView;
$this->title = 'Xổ số cả nước';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    table{
        width: 100%;
    }
</style>
<div class="result-index">
    <?php echo $this->render('_search-ket-qua-xo-so', [
    ]) ?>
    <div class="main">
        <?php echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,

            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'postdate',
                [
                    'attribute' => 'result',
                    'format'=>'raw',
                ],
                [
                    'attribute' => 'province',
                    'value' => function ($model) {
                        return $model->province ? $model->provinces->category : '';
                    },
                    'filterType' => GridView::FILTER_SELECT2,
                    'filter' => \yii\helpers\ArrayHelper::map(\common\models\Province::find()->all(), 'id', 'category'),
                    'filterWidgetOptions' => [
                        'pluginOptions' => ['allowClear' => true],
                    ],
                    'filterInputOptions' => ['placeholder' => ''],
                    'format' => 'raw'
                ],
            ],
        ]); ?>
    </div>
</div>
