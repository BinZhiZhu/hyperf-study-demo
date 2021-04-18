<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
 * @document https://hyperf.wiki
 */
namespace App\Components;

use App\Interfaces\CustomerServiceInterface;

/**
 * Class CustomerService.
 */
class CustomerService implements CustomerServiceInterface
{
    /**
     * 获取客户实体.
     * @return mixed
     */
    public function getCustomer(int $id)
    {
        return "客户ID:{$id}";
    }
}
