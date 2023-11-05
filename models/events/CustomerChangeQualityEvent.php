<?php

namespace app\models\events;

use app\models\Customer;
use app\models\Fax;

class CustomerChangeQualityEvent extends BaseEvent implements EventInterface
{
    public function getEventName(): string
    {
        return 'customer_change_quality';
    }

    public function getEventText(): string
    {
        // TODO: Implement getEventText() method.
        return \Yii::t('app', 'Property changed');
    }

    public function getEventDescription(): string
    {
        return "{$this->getEventText()} " .
            (Customer::getTypeTextByType($this->model->getDetailOldValue('quality')) ?? "not set") . ' to ' .
            (Customer::getTypeTextByType($this->model->getDetailNewValue('quality')) ?? "not set");
    }

}