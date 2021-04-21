<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
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
