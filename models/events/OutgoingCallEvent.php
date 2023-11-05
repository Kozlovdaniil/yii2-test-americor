<?php

namespace app\models\events;

use app\models\Fax;

class OutgoingCallEvent extends BaseEvent implements EventInterface
{
    public function getEventName(): string
    {
        return 'outgoing_call';
    }
    public function getEventText(): string
    {
        return \Yii::t('app', 'Outgoing call');

    }

    public function getEventDescription(): string
    {
        $call = $this->model->call;
        return ($call ? $call->totalStatusText . ($call->getTotalDisposition(false) ? " <span class='text-grey'>" . $call->getTotalDisposition(false) . "</span>" : "") : '<i>Deleted</i> ');
    }
}