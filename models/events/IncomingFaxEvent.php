<?php

namespace app\models\events;

use app\models\Fax;

class IncomingFaxEvent extends BaseEvent implements EventInterface
{
    public function getEventName(): string
    {
        return 'incoming_fax';
    }

    public function getEventText(): string
    {
        return \Yii::t('app', 'Incoming fax');
    }

    public function getEventDescription(): string
    {
        return $this->getEventText();
    }

}