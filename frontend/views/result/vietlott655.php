<?php
/**
 * Created by nvdiepse.
 * User: NgoGiaDiep
 * Date: 6/25/2019
 * Time: 4:14 PM
 */
use kartik\grid\GridView;
$this->title = 'Vietlott655';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="result-index">
    <?php echo $this->render('_search-vietlott655', [
//        'model' => $searchModel,
    ]) ?>
    <div style="margin: 10px;"></div>
    <div class="col-sm-12">
        <?php echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'ki',
                'ngay',
                'j1',
                'j2',
                'g1',
                'g2',
                'g3',
                 'so1',
                 'so2',
                 'so3',
                 'so4',
                 'so5',
                 'so6',
                 'so7',
                'jackport1',
                'jackport2',
            ],
        ]); ?>
    </div>
</div>
