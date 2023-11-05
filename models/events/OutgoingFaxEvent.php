<?php

namespace app\models\events;

use app\models\Fax;

class OutgoingFaxEvent extends BaseEvent implements EventInterface
{
    public function getEventName(): string
    {
        return 'outgoing_fax';
    }
    public function getEventText(): string
    {

        return \Yii::t('app', 'Outgoing fax');

    }

    public function getEventDescription(): string
    {
        return $this->getEventText();
    }

}