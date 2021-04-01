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
namespace App\Interfaces;

/**
 * Interface CustomerServiceInterface.
 */
interface CustomerServiceInterface
{
    /**
     * 获取客户实体.
     * @return mixed
     */
    public function getCustomer(int $id);
}
