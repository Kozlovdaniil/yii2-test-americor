<?php

namespace app\models\events;

interface EventInterface
{
    public function getEventName(): string;
    public function getEventText(): string;
    public function getEventDescription(): string;

}