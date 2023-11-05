<?php

namespace app\models\events;

use app\models\Customer;
use app\models\Fax;

class CustomerChangeTypeEvent extends BaseEvent implements EventInterface
{
    public function getEventName(): string
    {
        return 'customer_change_type';
    }
    public function getEventText(): string
    {
        // TODO: Implement getEventText() method.
        return \Yii::t('app', 'Type changed');
    }

    public function getEventDescription(): string
    {
        return "{$this->getEventText()} " .
            (Customer::getTypeTextByType($this->model->getDetailOldValue('type')) ?? "not set") . ' to ' .
            (Customer::getTypeTextByType($this->model->getDetailNewValue('type')) ?? "not set");
    }

}