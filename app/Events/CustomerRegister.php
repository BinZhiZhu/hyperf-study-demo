<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Events;

/**
 * Class CustomerRegister.
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
