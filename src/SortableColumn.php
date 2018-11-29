<?php

namespace kl83\grid;

use yii\grid\Column;

class SortableColumn extends Column
{
    public function init()
    {
        SortableAsset::register($this->grid->view);
        $this->grid->options['class'] .= ' sortable';
        $this->headerOptions = [
            'class' => 'sortable-column',
        ];
        $this->contentOptions = [
            'class' => 'sortable-cell text-center',
        ];
        parent::init();
    }

    protected function renderDataCellContent($model, $key, $index)
    {
        return "<span class='glyphicon glyphicon-option-vertical'></span>";
    }
}
