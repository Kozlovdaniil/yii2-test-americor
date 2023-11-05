<?php

namespace app\models\events;

use app\models\History;

class EventsFactory
{

    public static function getByHistoryRecord(History $record): EventInterface
    {
        $classItems = explode('_', $record->event);
        $classItems = array_map('ucfirst', $classItems);
        $class = 'app\models\events\\' . implode('', $classItems) . 'Event';
        if (class_exists($class)) {
            return new $class($record);
        }

        throw new NotFoundException();
    }

}