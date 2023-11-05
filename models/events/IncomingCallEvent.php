<?php

namespace app\models\events;

use app\models\Fax;

class IncomingCallEvent extends BaseEvent implements EventInterface
{
    public function getEventName(): string
    {
        return 'incoming_call';
    }

    public function getEventText(): string
    {
        return \Yii::t('app', 'Incoming call');
    }

    public function getEventDescription(): string
    {
        $call = $this->model->call;
        return ($call ? $call->totalStatusText . ($call->getTotalDisposition(false) ? " <span class='text-grey'>" . $call->getTotalDisposition(false) . "</span>" : "") : '<i>Deleted</i> ');
    }

}