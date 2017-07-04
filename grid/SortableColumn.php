<?php
namespace kl83\grid;

class SortableColumn extends \yii\grid\Column
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
