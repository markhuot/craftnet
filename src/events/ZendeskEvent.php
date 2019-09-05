<?php

namespace craftnet\events;

use yii\base\Event;

class ZendeskEvent extends Event
{
    /**
     * @var int
     */
    public $ticketId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $plan;
}
