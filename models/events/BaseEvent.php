<?php

namespace app\models\events;

use app\models\History;

abstract class BaseEvent
{
    protected $model;

    public function __construct(History $model)
    {
        $this->model = $model;
    }

}