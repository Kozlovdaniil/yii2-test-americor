<?php

namespace app\models\events;

use app\models\Customer;
use app\models\Fax;

class CompletedTaskEvent extends BaseEvent implements EventInterface
{
    public function getEventName(): string
    {
        return 'completed_task';
    }

    public function getEventText(): string
    {
        return \Yii::t('app', 'Task completed');
    }

    public function getEventDescription(): string
    {
        $task = $this->model->task;
        return "{$this->getEventText()}: " . ($task->title ?? '');
    }

}