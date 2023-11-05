<?php

namespace app\models\events;

use app\models\Sms;

class OutgoingSmsEvent extends BaseEvent implements EventInterface
{


    public function getEventName(): string
    {
        return 'outgoing_sms';
    }

    public function getEventText(): string
    {
        return \Yii::t('app', 'Outgoing message');

    }

    public function getEventDescription(): string
    {
        return $this->model->sms->message;

    }

}