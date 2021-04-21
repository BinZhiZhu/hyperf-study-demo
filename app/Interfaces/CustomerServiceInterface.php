<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
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
