<?php

namespace Ka\XmChart\Modules\Chart;

/**
 * chart module definition class
 */
class ChartModule extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public function init(): void
    {
        $this->controllerNamespace = 'Ka\XmChart\Modules\Chart\Controllers';

        parent::init();
    }
}
