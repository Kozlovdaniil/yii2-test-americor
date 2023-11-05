<?php

namespace app\models\events;

use app\models\Sms;

class IncomingSmsEvent extends BaseEvent implements EventInterface
{

    public function getEventName(): string
    {
        return 'incoming_sms';
    }
    public function getEventText(): string
    {
        return \Yii::t('app', 'Incoming message');
    }

    public function getEventDescription(): string
    {
        return $this->model->sms->message;
    }

}