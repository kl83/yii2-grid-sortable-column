# Yii2 GridView sortable column
[![Latest Stable Version](https://poser.pugx.org/kl83/yii2-grid-sortable-column/v/stable)](https://packagist.org/packages/kl83/yii2-grid-sortable-column)
[![Total Downloads](https://poser.pugx.org/kl83/yii2-grid-sortable-column/downloads)](https://packagist.org/packages/kl83/yii2-grid-sortable-column)
[![License](https://poser.pugx.org/kl83/yii2-grid-sortable-column/license)](https://packagist.org/packages/kl83/yii2-grid-sortable-column)

The GridView column class for sorting rows. Looks like this:

![Preview](https://raw.githubusercontent.com/kl83/yii2-grid-sortable-column/master/preview.png)

## Installation
The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run
~~~
php composer.phar require kl83/yii2-grid-sortable-column ~1.0.0
~~~
or add
~~~
"kl83/yii2-grid-sortable-column": "~1.0.0"
~~~
to the require section of your composer.json file.

## Usage
### Add column
```php
<?= GridView::widget([
    'id' => 'gridview',
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        [ 'class' => 'kl83\grid\SortableColumn' ],
        'title',
        'type',
        [ 'class' => 'yii\grid\ActionColumn' ],
    ],
]); ?>
```
### Listen GridView event
```php
$this->registerJs("
    $('#gridview').bind('sortablecolumn-sort', function ( e, data ) {
        // Sending data to the server
        $.get('/move-row', {
            itemId: data.itemId, // The key of the dragged row
            prevId: data.prevId, // The key of the previous row, false if the row is the first
            nextId: data.nextId  // The key of the next row, false if the row is the last
        });
    });
");
```

## License
MIT License
