<?php

namespace app\models\events;

use app\models\Customer;
use app\models\Fax;

class CreatedTaskEvent extends BaseEvent implements EventInterface
{
    public function getEventName(): string
    {
        return 'created_task';
    }

    public function getEventText(): string
    {
        return \Yii::t('app', 'Task created');
    }

    public function getEventDescription(): string
    {
        $task = $this->model->task;
        return "{$this->getEventText()}: " . ($task->title ?? '');
    }

}