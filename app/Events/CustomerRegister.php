<?php

namespace App\Events;

/**
 * Class CustomerRegister
 * @package App\Events
 */
class CustomerRegister
{

    /**
     * @var int 客户ID
     */
    public $userId;

    /**
     * CustomerRegister constructor.
     * @param $userId
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
    }
}