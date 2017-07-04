<?php

use yii\data\ArrayDataProvider;
use yii\grid\GridView;

/* @var $this \yii\web\View */

$data = [
    [ 'id' => 1, 'lastname' => 'Dou', 'firstname' => 'Joe' ],
    [ 'id' => 2, 'lastname' => 'Smith', 'firstname' => 'Jimmy' ],
    [ 'id' => 3, 'lastname' => 'O’Reilly', 'firstname' => 'Tim' ],
    [ 'id' => 4, 'lastname' => 'Brin', 'firstname' => 'Sergey' ],
    [ 'id' => 5, 'lastname' => 'Reeves', 'firstname' => 'Keanu' ],
];

$dataProvider = new ArrayDataProvider([
    'allModels' => $data,
    'key' => 'id',
]);

$this->registerJs("
    $('#grid').bind('sortablecolumn-sort', function(e, data){
        if ( ! data.prevId ) {
            $('#log').append('<p>Item #'+data.itemId+' dropped to first, before #'+data.nextId+'</p>');
        } else if ( ! data.nextId ) {
            $('#log').append('<p>Item #'+data.itemId+' dropped to last, after #'+data.prevId+'</p>');
        } else {
            $('#log').append('<p>Item #'+data.itemId+' dropped after #'+data.prevId+', before #'+data.nextId+'</p>');
        }
    });
");

echo GridView::widget([
    'id' => 'grid',
    'dataProvider' => $dataProvider,
    'columns' => [
        [ 'class' => 'kl83\grid\SortableColumn' ],
        'id',
        'firstname',
        'lastname',
    ],
]);

echo "<div id='log'></div>";
